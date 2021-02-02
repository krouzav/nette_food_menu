<?php

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\files\food_menu\app\Presenters/templates/Nutritions/default.latte */
final class Templatebcf0e50825 extends Latte\Runtime\Template
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
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['output' => '3'], $this->params) as $ʟ_v => $ʟ_l) {
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
		echo "\n";
		$iterations = 0;
		foreach ($nutritions as $output) {
			echo '		<p>';
			echo LR\Filters::escapeHtmlText($output->id) /* line 4 */;
			echo '</p>
        <br>

';
			$iterations++;
		}
		echo "\n";
		/* line 9 */ $_tmp = $this->global->uiControl->getComponent("nutritionsForm");
		if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		echo "\n";
	}

}
