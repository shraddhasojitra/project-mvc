<?php
    class model 
    {
        public $connection="";
        public function __construct()
        {
            try{
                $this->connection=new mysqli("localhost","root","","s_milina");
                if($this->connection)
                {
                 //  echo "connection successfull";
                }
            }
            catch(Exception $e)
            {
                echo "not connection";
                //  die(mysqli_error($this->connection,$e));
            }
            //database conection code
            
            
            // try
            // {
            //     $this->connection=new mysqli("localhost","root","","s_milina");
                
            // }
            

        }
        // create a member function for insert alldata
    public function insert_data($table,$data)
    {
         $key=array_keys($data);
        
         $key1=implode(",",$key);
        
         $value=array_values($data);
       
         $value1=implode("','",$value);
         //print_r($value1)
        //  echo $insert="insert into $table($key1) values('$value1')"; exit();
         $insert="insert into $table($key1) values('$value1')";
         
        // insert into tbl_contact(text_firstname,text_lastname,text_email,text_mobile,text_message,text_datetime) values('hitesh','joshi','hitesh@gmail.com','9998003879','hi','20/09/2022 09:28:27 am')
        
         $exe=mysqli_query($this->connection,$insert);
         return $exe;
    }


    }
    //$obj=new model();
?>