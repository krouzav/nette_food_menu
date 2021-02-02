<?php

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\files\food_menu\app\Presenters/templates/Nutrition/default.latte */
final class Template87aca49696 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars());
		echo "\n";
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['data' => '28'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		echo '
    <div class="form-group">
        <div class="form form-control-md"> 
';
		/* line 5 */ $_tmp = $this->global->uiControl->getComponent("nutritionForm");
		if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		echo '        </div>
    </div>
<div class= "mt-3">
    <div class="form-group">
        ';
		/* line 10 */
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $this->global->formsStack[] = $this->global->uiControl["editDelete"], []);
		echo '


    </div>
</div>
    <div class="mt-3">
            <table class="table table-bordered">
                <thead class = "thead-dark">
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <div class ="mb-3">
                    ';
		echo end($this->global->formsStack)['delete']->getControl() /* line 25 */;
		echo '
                    ';
		echo end($this->global->formsStack)['edit']->getControl() /* line 26 */;
		echo '
               </div>
';
		$iterations = 0;
		foreach ($nutrition as $data) {
			echo '                    <tr>
                        <td>';
			$_input = is_object($data->id) ? $data->id : end($this->global->formsStack)[$data->id];
			echo $_input->getControl() /* line 30 */;
			echo '</td>
                        <td>';
			echo LR\Filters::escapeHtmlText($data->name) /* line 31 */;
			echo '</td>
                        <td>';
			echo LR\Filters::escapeHtmlText($data->description) /* line 32 */;
			echo '</td>
                        
                    </tr>
';
			$iterations++;
		}
		echo '        </table>
    </div>

    




    ';
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
		echo "\n";
	}

}
