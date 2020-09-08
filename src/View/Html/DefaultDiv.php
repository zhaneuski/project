<?php

namespace View\Html;

class DefaultDiv extends AbstractTag
{
    protected $table;
    protected $data;
//    protected $headers;

    public function __construct()
    {
        $this->clear();
    }

    public function clear(): self
    {
        $this->style = '';
        $this->data = '';
        return $this;
    }

    public function data(array $data)
    {

        $str = "";

        foreach ($data as $row)
        {
            $str .= "\t<div class='news_item'>\n";

            $str .= "<h3 class=\"news_caption\">$row[header]</h3>";
            $str .= "<div class=\"news_text\">$row[newscontent]</div>";
            $str .= "<div class=\"container_date\"><div class=\"date\">$row[date]</div></div>";

            $str .= "\t</div>\n";
        }
        $this->data = $str;
        return $this;
    }

    public function html()
    {
        return "<div class=\"news_content\">$this->data</div>\n";
    }
}