<?php

namespace craft\webhooks\migrations;

use craft\db\Migration;

/**
 * m181212_105527_request_types migration.
 */
class m190112_00000_json_payload extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('{{%webhooks}}', 'payloadTemplate', $this->mediumText()->after('eventAttributes'));
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropColumn('{{%webhooks}}', 'payloadTemplate');
    }
}