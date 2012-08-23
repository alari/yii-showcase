<?php

class m120821_061145_catImagesHolder extends CDbMigration
{
    public function up()
    {
        $this->addColumn("{{category}}", "pic_holder_id", "int");
        $this->addForeignKey("cat_pic", "{{category}}", "pic_holder_id", "{{images_holder}}", "id");
        $this->addColumn("{{category}}", "list_holder_id", "int");
        $this->addForeignKey("cat_list", "{{category}}", "list_holder_id", "{{images_holder}}", "id");
    }

	public function down()
	{
		echo "m120821_061145_catImagesHolder does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}