<?php
	class database
    {
        public $_dbh    = '';
        public $_sql    = '';
        public $_cursor = NULL;       
        
        //Hàm kết nối tới CSDL
        public function database() {
            $this->_dbh = new PDO('mysql:host=localhost; dbname=db22_web_trainning','root','');
            $this->_dbh->query('set names "utf8"');
        }
        
        //Hàm set chuỗi sql cho biến toàn cục $_sql
        public function setQuery($sql) {
            $this->_sql = $sql;
        }
        
        //Hàm thực thi một câu lệnh
        public function execute($options=array()) {
            $this->_cursor = $this->_dbh->prepare($this->_sql);
            if($options) {  //If have $options then system will be tranmission parameters (Nếu $options có giá trị ta sẽ gắn giá trị cho hàm)
                for($i=0; $i<count($options); $i++) {
                    $this->_cursor->bindParam($i+1,$options[$i]);
                }
            }
            $this->_cursor->execute();
            return $this->_cursor;
        }
        
        //Hàm load toàn bộ dữ liệu trong 1 bảng
        public function loadAllRows($options=array()) {
            if(!$options) {
                if(!$result = $this->execute())
                    return false;
            }
            else {
                if(!$result = $this->execute($options))
                    return false;
            }
            return $result->fetchAll(PDO::FETCH_OBJ);
        }
        
        //Hàm load một bản ghi trong table
        public function loadRow($option=array()) {
            if(!$option) {
                if(!$result = $this->execute())
                    return false;
            }
            else {
                if(!$result = $this->execute($option))
                    return false;
            }
            return $result->fetch(PDO::FETCH_OBJ);
        }
}
?>