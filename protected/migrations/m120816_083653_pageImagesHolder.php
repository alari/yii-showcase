<?php

class m120816_083653_pageImagesHolder extends CDbMigration
{
	public function safeUp()
	{
        $this->addColumn("{{static_page}}", "pic_holder_id", "int");
        $this->addForeignKey("page_pic", "{{static_page}}", "pic_holder_id", "{{images_holder}}", "id");
        $this->addColumn("{{static_page}}", "list_holder_id", "int");
        $this->addForeignKey("page_list", "{{static_page}}", "list_holder_id", "{{images_holder}}", "id");
	}

	public function safeDown()
	{
		echo "m120816_083653_pageImagesHolder does not support migration down.\n";
		return false;
	}
}