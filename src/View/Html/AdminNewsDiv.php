<?php

namespace View\Html;

class AdminNewsDiv extends Table
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
            $str .= "<h3 class=\"news_caption\">$row[header]</h3>";
            $str .= "<div class=\"news_text\">$row[newscontent]</div>";
            $str .= "<div class=\"container_date\"><div class=\"date\">$row[date]</div></div>";
            $str .= "<div class=\"container_edit\"><div class=\"edit\"><a href='?action=showedit&type=$this->type&id=$row[id]'>Edit</a></div></div>";
            $str .= "<div class=\"container_del\"><div class=\"del\"><a href='?action=del&type=$this->type&id=$row[id]'>Delete</a></div></div>";
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