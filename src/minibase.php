<?php
namespace Facebook\Markdown;

function render(string $markdown): string {
  $ast = Markdown\parse(new Markdown\ParserContext(), $markdown);

  $html = (new Markdown\HTMLRenderer(
    new Markdown\RenderContext()
  ))->render($ast);

  return $html;
}
