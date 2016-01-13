SELECT * FROM `iutilize`
INNER JOIN `requisitions` 
ON `iutilize`.`requisition_id`= `requisitions`.`id`
WHERE `requisitions`.`surveyor_id` = 1 AND `iutilize`.`instrument_id`=2

 $utilize = DB::table('iutilize')->join('requisitions','iutilize.requisition_id','=','requisitions.id')->select('iutilize.*')->get();

 $utilize = DB::table('iutilize')->join('requisitions','iutilize.requisition_id','=','requisitions.id')->select('iutilize.*')->where('requisitions.surveyor_id' , 1)->where('iutilize.instrument_id',1)->get();

$utilize = DB::table('iutilize')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();