<?php

namespace App\Models\Imports;
use App\Models\sheetone;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use DB;
use Schema;
class firstsheet implements ToCollection
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function collection(Collection $rows)
    {

        $str    ='';
        $insert = '';
        $append = '';

    foreach($rows[0] as $data){
    
       if(empty($data)){
           $data = 'testName'.rand();
       } 
        $str .= ','.str_replace('-','#',str_replace(' ','_',$data)). ' varchar(255)';
        $insert .= str_replace('#','_',str_replace(' ','_',$data)).',';
        $append .= '?,';
   
    }


    $count = count($rows[0]);
    $table = "excellTable".time();


    if (!Schema::hasTable($table)) {
   
  $createTableSqlString =
  "CREATE TABLE ".$table." (
    id int NOT NULL AUTO_INCREMENT" .$str." , PRIMARY KEY (id)
);";
    
DB::statement($createTableSqlString);

}


     
foreach ($rows as $key => $row) {
    $colData = '';

    if($key > 0){
    for($i=0; $i < $count ;$i++){
       
        $colData .= "'$row[$i]',";
    }

    $colData = rtrim($colData,',');

       DB::insert('insert into '.$table.' ('.rtrim($insert,',').') values ('.$colData.')' );
    }

        }




        
    }






}