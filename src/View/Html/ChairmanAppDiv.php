<?php

namespace View\Html;

class ChairmanAppDiv extends Table
{
    protected $type;

    public function setControllerType(string $type)
    {
        $this->type = $type;
        return $this;
    }

    public function data(array $data)
    {
        $str = "";

        foreach ($data as $row)
        {
            $str .= "\t<div class='news_item'>\n";
            $str .= "<h3 class=\"news_caption\">$row[caption]</h3>";
            $str .= "<p class=\"apartment\">apartment №$row[users_id]</p>";
            $str .= "<div class=\"news_text\">$row[image]</div>";
            $str .= "<div class=\"news_text\">$row[content]</div>";
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