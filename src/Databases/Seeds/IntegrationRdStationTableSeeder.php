<?php

use ConfrariaWeb\Integration\IntegrationType;
use Illuminate\Database\Seeder;

class IntegrationRdStationTableSeeder extends Seeder
{
    public function run()
    {
        $integrationsTypes = $this->getIntegrations();

        foreach ($integrationsTypes as $type) {
            IntegrationType::create($type);
            $this->command->info("Tipo de Integração " . $type['name'] . " criada.");
        }
    }

    private function getIntegrations()
    {
        return [
            'integrationRdStation' => [
                'name' => 'RD Station',
                'view' => 'integrationRdStation',
                'service' => 'IntegrationRdStationService'
            ]
        ];
    }
}
