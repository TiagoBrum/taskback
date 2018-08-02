<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class TaskController
{

    protected $taskService;

    public function __construct($service)
    {
        $this->taskService = $service;
    }

    public function getOne($id)
    {
        return new JsonResponse($this->taskService->getOne($id));
    }

    public function getAll()
    {
        return new JsonResponse($this->taskService->getAll());
    }

    public function save(Request $request)
    {
        $task = json_decode($request->getContent(), true);
        return new JsonResponse(array("id" => $this->taskService->save($task)));
    }

    public function update($id, Request $request)
    {
        $task = json_decode($request->getContent(), true);
        $task['data_edicao'] = date("Y-m-d H:i:s");
        
        return new JsonResponse($this->taskService->update($id, $task));
    }

    public function delete($id)
    {
        $task['status'] = 0;
        
        return new JsonResponse($this->taskService->update($id, $task));
        // return new JsonResponse($this->taskService->delete($id));
    }

    public function getDataFromRequest(Request $request)
    {
        return $task = array(
            "task" => $request->request->get("task"),
        );
    }
}
