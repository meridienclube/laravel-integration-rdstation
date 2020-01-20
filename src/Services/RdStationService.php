<?php

namespace ConfrariaWeb\IntegrationRdStation\Services\Integrations;

use ConfrariaWeb\Integration\Services\Contracts\IntegrationContract;

class RdStationService implements IntegrationContract
{
    protected $data = [];
    protected $parameters = [];

    public function set(Array $data)
    {
        $this->data = isset($data[0]) ? $data[0] : NULL;
        $this->parameters = isset($data[1]) ? $data[1] : NULL;
    }

    public function get()
    {
        $getCollect = [];
        if (isset($this->parameters['leads'])) {
            foreach ($this->parameters['leads'] as $lead) {
                $getCollect[] = array_merge($this->data, $lead);
            }
        }
        return collect($getCollect);
    }

    public function fields()
    {
        return collect([
            'name' => 'Nome',
            'email' => 'E-mail',
            'bio' => 'Notas sobre o contato',
            'website' => 'Site do contato',
            'job_title' => 'Cargo do contato',
            'personal_phone' => 'Telefone do contato',
            'mobile_phone' => 'Telefone celular do contato',
            'city' => 'Cidade do contato',
            'state' => 'Estado do contato',
            'country' => 'País do contato',
            'twitter' => 'Twitter do contato',
            'facebook' => 'Facebook do contato',
            'linkedin' => 'Linkedin do contato'
        ]);
    }

    public function test()
    {
        return true;
    }

}
