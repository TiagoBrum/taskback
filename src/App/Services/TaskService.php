<?php

namespace App\Services;

class TaskService extends BaseService
{

    public function getOne($id)
    {
        return $this->db->fetchAssoc("SELECT * FROM task WHERE id=?", [(int) $id]);
    }

    public function getAll()
    {
        return $this->db->fetchAll("SELECT * FROM task where status != 0");
    }

    function save($note)
    {
        $this->db->insert("task", $note);
        return $this->db->lastInsertId();
    }

    function update($id, $note)
    {
        return $this->db->update('task', $note, ['id' => $id]);
    }

    function delete($id)
    {
        return $this->db->delete("task", array("id" => $id));
    }

}
