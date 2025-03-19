<?php

namespace Yumei\Tests;

use Yumei\Tests\TaskManager;
use PHPUnit\Framework\TestCase;

class TaskManagerTest extends TestCase {
  public function testConstructeur()
    {
      $task = new TaskManager();
      $this->assertCount(0, $task->getTasks());
    }
  
  public function testAddTask()
  {
    $task = new TaskManager();
    $task->addTask('Ajouter tâche');
    $this->assertCount(1, $task->getTasks());
    $this->assertEquals("Ajouter tâche", $task->getTasks()[0]);
  }

  public function testRemoveTask()
  {
    $task = new TaskManager();
    $task->addTask('Tâche à supprimer');
    $task->removeTask(0);
    $this->assertCount(0, $task->getTasks());
  }

  public function testGetTasks()
  {
    $task = new TaskManager();
    $task->addTask('Tâche 1');
    $task->addTask('Tâche 2');
    $this->assertCount(2, $task->getTasks());
  }

  public function testGetTask()
  {
    $task = new TaskManager();
    $task->addTask('Tâche 1');
    $this->assertEquals('Tâche 1', $task->getTask(0));
  }

  public function testRemoveInvalidIndexThrowsException()
  {
    $task = new TaskManager();
    $this->expectException(\OutOfBoundsException::class);
    $task->removeTask(0);
  }

  public function testGetInvalidIndexThrowsException()
  {
    $task = new TaskManager();
    $this->expectException(\OutOfBoundsException::class);
    $task->getTask(0);
  }

  public function testTaskOrderAfterRemoval()
      {
    $task = new TaskManager();
    $task->addTask('Tâche 1');
    $task->addTask('Tâche 2');
    $task->removeTask(0);
    $this->assertEquals('Tâche 2', $task->getTasks()[0]);
  }
}