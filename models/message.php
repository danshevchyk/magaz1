<?php

class Message extends Model {

    public function save($data, $id = null){
        if ( !isset($data['login']) || !isset($data['email']) || !isset($data['message'])){
            return false;
        }

        $id = (int)$id;
        $name = $this->db->escape(htmlspecialchars( trim($data['login']), ENT_QUOTES) );
        $email = $this->db->escape(htmlspecialchars( trim($data['email']), ENT_QUOTES) );
        $message = $this->db->escape(htmlspecialchars( trim($data['message']), ENT_QUOTES) );

        if ( !$id ) {

            $sql = "
            insert into messages
                set name = '{$name}',
                    email = '{$email}',
                    message = '{$message}'
            ";
            } else {
            $sql = "
              update messages
                set name = '{$name}',
                    email = '{$email}',
                    message = '{$message}'
                    where id = {$id}
            ";
        }

        return $this->db->query($sql);
    }

    public function getList(){
        $sql = "select * from messages where 1";

        return $this->db->query($sql);

    }
<<<<<<< HEAD
    public function getByName($name){
        $name = $this->db->escape($name);
        $sql = "select * from messages where name = '{$name}' limit 1";
        $result = $this->db->query($sql);
        return isset($result[0]) ? $result[0] : null;

    }

    public function delete($id){
        $id = (int)$id;
        $sql = "delete from messages where id = {$id}";
        return $this->db->query($sql);
    }

=======
>>>>>>> 3bfe73c050ac6cd9e40f3501da855beaab429623


}