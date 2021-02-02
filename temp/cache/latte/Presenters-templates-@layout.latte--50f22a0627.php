<?php

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\files\food_menu\app\Presenters/templates/@layout.latte */
final class Template50f22a0627 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['head' => 'blockHead', 'scripts' => 'blockScripts'],
	];


	public function main(): array
	{
		extract($this->params);
		echo '
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>';
		if ($this->hasBlock("title")) {
			$this->renderBlock($ʟ_nm = 'title', [], function ($s, $type) {
				$ʟ_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('striphtml', $ʟ_fi, $s));
			}) /* line 12 */;
			echo ' | ';
		}
		echo 'Nette Sandbox</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 16 */;
		echo '/css/style.css">
	';
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('head', get_defined_vars());
		echo '
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <div class="container">
        <a class="navbar-brand" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default"));
		echo '">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">


            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Ingredience:"));
		echo '">Ingrediences</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Nutrition:"));
		echo '">test</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Ingredience:"));
		echo '">Ingrediences</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Ingredience:"));
		echo '">Ingrediences</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href=#>About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

	<div class=container>
';
		$iterations = 0;
		foreach ($flashes as $flash) {
			echo '		<div';
			echo ($ʟ_tmp = array_filter(['alert', 'alert-' . $flash->type])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "";
			echo '>';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 55 */;
			echo '</div>
';
			$iterations++;
		}
		echo "\n";
		$this->renderBlock($ʟ_nm = 'content', [], 'html') /* line 57 */;
		echo '	</div>

';
		$this->renderBlock('scripts', get_defined_vars());
		echo '
</body>
</html>
';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['flash' => '55'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block head} on line 17 */
	public function blockHead(array $ʟ_args): void
	{
		
	}


	/** {block scripts} on line 60 */
	public function blockScripts(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		echo '	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://nette.github.io/resources/js/3/netteForms.min.js"></script>
	<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 63 */;
		echo '/js/main.js"></script>
';
	}

}
