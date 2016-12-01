 public function sendMail(){
        
    $fileName = 'pricelist.pdf';

    $filePath = 'app/views/temp/';

    $pricelist = DB::table('items')
                    ->select('items.name as item','items.purchase_price','items.selling_price')
                    ->get();


    $organization = Organization::find(1);

    $pdf = PDF::loadView('erpreports.pricelist', compact('pricelist', 'organization'))->setPaper('a4')->setOrientation('potrait');

    $pdf->save($filePath.$fileName);

    $send_mail = Mail::send('emails.welcome', array('key' => 'value'), function($message) use ($filePath,$fileName)
    {   
    $message->from('nyandorolamech@gmail.com', 'Lamech Aondo');

    
    $message->to('lamech.aondo@lixnet.net', 'Lamech Nyandoro')->Bcc('nyandorolamech@gmail.com', 'Lamech Nyandoro')->subject('Price List Report!');

    
    $message->attach($filePath.$fileName);

    
});

   unlink($filePath.$fileName);
   echo 'Price List Report Successfully Sent!';
    return $send_mail;
    }



    public function sendMail_sales(){
        
    $fileName = 'Sales Report.pdf';

    $filePath = 'app/views/temp/';

    $from = date('Y:m:d');
    $to= date('Y:m:d');

    $sales = DB::table('erporders')
                ->join('erporderitems', 'erporders.id', '=', 'erporderitems.erporder_id')
                ->join('items', 'erporderitems.item_id', '=', 'items.id')
                ->join('clients', 'erporders.client_id', '=', 'clients.id')
                ->where('erporders.type','=','sales')
                ->whereBetween('erporders.date', array($from, $to))
                ->orderBy('erporders.order_number', 'Desc')
                ->select(DB::raw('clients.name as client,items.name as item,quantity,clients.address as address,
                  clients.phone as phone,clients.email as email,erporders.id as id,erporders.status,
                  erporders.date,erporders.order_number as order_number,price,description,erporders.type'))
                
                ->get();
   
     $total_payment= DB::table('payments')
                ->join('clients', 'payments.client_id', '=', 'clients.id')
                ->where('clients.type','=','Customer')
                /*->whereBetween('erporders.date', array(Input::get("from"), Input::get("to")))*/
                ->select(DB::raw('COALESCE(SUM(amount_paid),0) as amount_paid'))
                
                ->first();

    $total_sales_todate = DB::table('erporders')
                ->join('erporderitems', 'erporders.id', '=', 'erporderitems.erporder_id')
                ->where('erporders.type','=','sales')                
                ->select(DB::raw('COALESCE(SUM(quantity*price),0) as total_sales'))               
                ->first();

    $discount_amount = DB::table('erporders')
                ->join('erporderitems', 'erporders.id', '=', 'erporderitems.erporder_id')               
                ->whereBetween('erporders.date', array($from, $to))                
                ->select(DB::raw('COALESCE(SUM(discount_amount),0) as discount_amount'))               
                ->first();

    $discount_amount_todate = DB::table('erporders')
                ->join('erporderitems', 'erporders.id', '=', 'erporderitems.erporder_id')               
                ->select(DB::raw('COALESCE(SUM(discount_amount),0) as discount_amount'))             
                ->first();

      $items = Item::all();
      $locations = Location::all();
      $organization = Organization::find(1);

        $pdf = PDF::loadView('erpreports.salesReport', compact('sales', 'discount_amount','total_sales_todate','discount_amount_todate','total_payment', 'organization','from','to'))->setPaper('a4')->setOrientation('potrait');

    $pdf->save($filePath.$fileName);

    $send_mail = Mail::send('emails.welcome', array('key' => 'value'), function($message) use ($filePath,$fileName)
    {   
    $message->from('nyandorolamech@gmail.com', 'Lamech Aondo');

    
     
    $message->to('lamech.aondo@lixnet.net', 'Lamech Nyandoro')->cc('chrispus.cheruiyot@lixnet.net', 'Chrispus Cheruiyot')->subject('Daily Sales Report!');

    
    $message->attach($filePath.$fileName);

    
});

   unlink($filePath.$fileName);
   echo 'Sales Report Successfully Sent!';
    return $send_mail;
    }


    public function sendMail_sales_summary(){
        
    $fileName = 'Summary Report.pdf';

    $filePath = 'app/views/temp/';

    $from = date('Y:m:d');
    $to= date('Y:m:d');

    $sales = DB::table('erporders')
                ->join('erporderitems', 'erporders.id', '=', 'erporderitems.erporder_id')
                ->join('items', 'erporderitems.item_id', '=', 'items.id')
                ->join('clients', 'erporders.client_id', '=', 'clients.id')
                ->where('erporders.type','=','sales')
                ->whereBetween('erporders.date', array($from, $to))
                ->orderBy('erporders.order_number', 'Desc')
                ->select(DB::raw('clients.name as client,items.name as item,quantity,clients.address as address,
                  clients.phone as phone,clients.email as email,erporders.id as id,erporders.status,
                  erporders.date,erporders.order_number as order_number,price,description,erporders.type'))
                
                ->get();
   
     $total_payment= DB::table('payments')
                ->join('clients', 'payments.client_id', '=', 'clients.id')
                ->where('clients.type','=','Customer')
                /*->whereBetween('erporders.date', array(Input::get("from"), Input::get("to")))*/
                ->select(DB::raw('COALESCE(SUM(amount_paid),0) as amount_paid'))
                
                ->first();

    $total_sales_todate = DB::table('erporders')
                ->join('erporderitems', 'erporders.id', '=', 'erporderitems.erporder_id')
                ->where('erporders.type','=','sales')                
                ->select(DB::raw('COALESCE(SUM(quantity*price),0) as total_sales'))               
                ->first();

    $discount_amount = DB::table('erporders')
                ->join('erporderitems', 'erporders.id', '=', 'erporderitems.erporder_id')               
                ->whereBetween('erporders.date', array($from, $to))                
                ->select(DB::raw('COALESCE(SUM(discount_amount),0) as discount_amount'))               
                ->first();

    $discount_amount_todate = DB::table('erporders')
                ->join('erporderitems', 'erporders.id', '=', 'erporderitems.erporder_id')               
                ->select(DB::raw('COALESCE(SUM(discount_amount),0) as discount_amount'))             
                ->first();

      $items = Item::all();
      $locations = Location::all();
      $organization = Organization::find(1);
      $accounts = DB::table('accounts')
                    ->get();


        $pdf = PDF::loadView('erpreports.salesSummaryReport', compact('sales','accounts', 'discount_amount','total_sales_todate','discount_amount_todate','total_payment', 'organization','from','to'))->setPaper('a4')->setOrientation('potrait');

    $pdf->save($filePath.$fileName);

    $send_mail = Mail::send('emails.welcome', array('key' => 'value'), function($message) use ($filePath,$fileName)
    {   
    $message->from('info@gx.co.ke', 'Gas Express');

    
     
    $message->to('nyandorolamech@gmail.com', 'Lamech Nyandoro')->Bcc('chrispus.cheruiyot@lixnet.net', 'Chrispus Cheruiyot')->subject('Daily Summary Report!');

    
    $message->attach($filePath.$fileName);

    
});

   unlink($filePath.$fileName);
   echo 'Daily Summary Report Successfully Sent!';
    return $send_mail;
    }


    public function sendMail_purchases(){
        
    $fileName = 'Purchases Report.pdf';

    $filePath = 'app/views/temp/';

    $from = date('Y:m:d');
    $to= date('Y:m:d');

    $purchases = DB::table('erporders')
                ->join('erporderitems', 'erporders.id', '=', 'erporderitems.erporder_id')
                ->join('items', 'erporderitems.item_id', '=', 'items.id')
                ->join('clients', 'erporders.client_id', '=', 'clients.id')
                ->where('erporders.type','=','purchases')
                ->whereBetween('erporders.date', array($from, $to))
                ->orderBy('erporders.order_number', 'Desc')
                ->select('clients.name as client','items.name as item','quantity','clients.address as address',
                  'clients.phone as phone','clients.email as email','erporders.id as id','erporders.status',
                  'discount_amount','erporders.date','erporders.order_number as order_number','price','description','erporders.type')
                ->get();
          $items = Item::all();
          $locations = Location::all();
          $organization = Organization::find(1);

        $pdf = PDF::loadView('erpreports.purchasesReport', compact('purchases', 'organization','from','to'))->setPaper('a4')->setOrientation('potrait');    
        

    $pdf->save($filePath.$fileName);

    $send_mail = Mail::send('emails.welcome', array('key' => 'value'), function($message) use ($filePath,$fileName)
    {   
    $message->from('nyandorolamech@gmail.com', 'Lamech Aondo');

    
    $message->to('lamech.aondo@lixnet.net', 'Lamech Nyandoro')->cc('chrispus.cheruiyot@lixnet.net', 'Chrispus Cheruiyot')->subject('Daily Purchases Report!');

    
    $message->attach($filePath.$fileName);

    
});

   unlink($filePath.$fileName);
   echo 'Purchases Report Successfully Sent!';
    return $send_mail;
    }

    public function sendMail_expenses(){
        
    $fileName = 'Expenses Report.pdf';

    $filePath = 'app/views/temp/';

     $from = date('Y:m:d');
     $to= date('Y:m:d');

        $expenses = Expense::whereBetween('date', array($from, $to))->get();

        $organization = Organization::find(1);

        $pdf = PDF::loadView('erpreports.expensesReport', compact('expenses', 'organization','from','to'))->setPaper('a4')->setOrientation('potrait');   
        

    $pdf->save($filePath.$fileName);

    $send_mail = Mail::send('emails.welcome', array('key' => 'value'), function($message) use ($filePath,$fileName)
    {   
    $message->from('nyandorolamech@gmail.com', 'Lamech Aondo');

    
    $message->to('lamech.aondo@lixnet.net', 'Lamech Nyandoro')->cc('chrispus.cheruiyot@lixnet.net', 'Chrispus Cheruiyot')->subject('Daily Expenses Report!');

    
    $message->attach($filePath.$fileName);

    
});

   unlink($filePath.$fileName);
   echo 'Expenses Report Successfully Sent!';
    return $send_mail;
    }



    public function sendMail_payments(){
        
    $fileName = 'Payments Report.pdf';

    $filePath = 'app/views/temp/';

     $payments = Payment::all();

     /*$from = date('Y:m:d');
     $to= date('Y:m:d');

        $payments = DB::table('payments')
                    ->whereBetween('date', array($from, $to))->get();*/


        $erporders = Erporder::all();

        $erporderitems = Erporderitem::all();

        $organization = Organization::find(1);

        $pdf = PDF::loadView('erpreports.paymentsReport', compact('payments','erporders', 'erporderitems', 'organization','from','to'))->setPaper('a4')->setOrientation('potrait');   
        

    $pdf->save($filePath.$fileName);

    $send_mail = Mail::send('emails.welcome', array('key' => 'value'), function($message) use ($filePath,$fileName)
    {   
    $message->from('nyandorolamech@gmail.com', 'Lamech Aondo');

    
    $message->to('lamech.aondo@lixnet.net', 'Lamech Nyandoro')->cc('chrispus.cheruiyot@lixnet.net', 'Chrispus Cheruiyot')->subject('Daily Payments Report!');

    
    $message->attach($filePath.$fileName);

    
});

   unlink($filePath.$fileName);
   echo 'payments Report Successfully Sent!';
    return $send_mail;
    }

    public function sendMail_stock(){
        
    $fileName = 'Stock Report.pdf';

    $filePath = 'app/views/temp/';

     $from = date('Y:m:d');
     $to= date('Y:m:d');
     
        $items = DB::table('items')
                    ->whereBetween('date', array($from, $to))->get();


        $organization = Organization::find(1);

        $pdf = PDF::loadView('erpreports.stockReport', compact('items', 'organization','from','to'))->setPaper('a4')->setOrientation('landscape');   
        

    $pdf->save($filePath.$fileName);

    $send_mail = Mail::send('emails.welcome', array('key' => 'value'), function($message) use ($filePath,$fileName)
    {   
    $message->from('nyandorolamech@gmail.com', 'Lamech Aondo');

    
    $message->to('lamech.aondo@lixnet.net', 'Lamech Nyandoro')->cc('chrispus.cheruiyot@lixnet.net', 'Chrispus Cheruiyot')->subject('Daily Stock Report!');

    
    $message->attach($filePath.$fileName);

    
});

   unlink($filePath.$fileName);
   echo 'Stock Report Successfully Sent!';
    return $send_mail;
    }


     public function sendMail_account(){
        
    $fileName = 'Accounts Report.pdf';

    $filePath = 'app/views/temp/';

     $from = date('Y:m:d');
     $to= date('Y:m:d');

    /* $accounts = Accounts::find(1);*/
     
        $accounts = DB::table('accounts')
                    ->get();


        $organization = Organization::find(1);

        $pdf = PDF::loadView('erpreports.accountsReport', compact('accounts', 'organization','from','to'))->setPaper('a4')->setOrientation('potrait');   
        

    $pdf->save($filePath.$fileName);

    $send_mail = Mail::send('emails.welcome', array('key' => 'value'), function($message) use ($filePath,$fileName)
    {   
    $message->from('nyandorolamech@gmail.com', 'Lamech Aondo');

    
    $message->to('lamech.aondo@lixnet.net', 'Lamech Nyandoro')->cc('chrispus.cheruiyot@lixnet.net', 'Chrispus Cheruiyot')->subject('Daily Accounts Report!');

    
    $message->attach($filePath.$fileName);

    
});

   unlink($filePath.$fileName);
   echo 'Accounts Report Successfully Sent!';
    return $send_mail;
    }