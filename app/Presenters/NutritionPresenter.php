<?php

declare(strict_types=1);

namespace App\Presenters;


use Nette;
use Nette\Application\UI\Form;

class NutritionPresenter extends Nette\Application\UI\Presenter

{

    private Nette\Database\Explorer $database;

    public function __construct(Nette\Database\Explorer $database)
    {
        $this->database = $database;
    }

    public function renderDefault()
    {
        $this->template->nutrition = $this->database->table('nutrition');
    }

    protected function createComponentNutritionForm(): Form
    {
        $form = new Form;


        $form->addText('name', 'Name:')
            ->setRequired('Field name is required', 'Name:');

        $form->addText('description', 'Description:');

        $form->addSubmit('send', 'Add');
        $form->onSuccess[] = [$this, 'nutritionFormSucceeded'];

        return $form;
    }

    public function nutritionFormSucceeded(array $values): void
    {
        $this->database->table('nutrition')->insert($values);

        $this->flashMessage('Item was added', 'success');
        $this->redirect('default');
    }

    public function createComponentEditDelete(): Form
    {
        //fetch id from DB
        $data = $this->database->query('SELECT id FROM nutrition')->fetchAll();


        $form = new Form;
        $form->addSubmit('delete', 'Delete')->onClick[] = [$this, 'deleteButtonPressed'];
        $form->addSubmit('edit', 'Edit')->onClick[] = [$this, 'editButtonPressed'];
        foreach ($data as $row) {
            $form->addCheckbox(strval($row->id));
        }

        // foreach ($data as $id) {
        //     $form->addCheckbox(strval($data->$id));
        // }

        // foreach ($data->id as $id) {
        //     $form->addCheckbox("nutritionCheckbox:$id");
        // }
        return $form;
    }

    public function deleteButtonPressed(Form $form, array $values): void
    {

        $data = $form->getHttpData();

        foreach ($data as $key => $value) {
            if ($value = 'on') {
                echo intval(substr($key, 1, strlen($key) - 1)) . "<br>";
            }
        }



        // $checked = $form->getHttpData();
        // foreach ($checked['Delete'] as $key) {

        //     var_dump($key) . "<br>";
        // }
    }

    public function editButtonPressed()
    {
        echo "ahoj";
    }
}