<?php

/**
 * class ini digunakan untuk mendefinisikan session di server
 */
class Model_session extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * fungsi ini digunakan untuk membuat server-session untuk pertama login
     * @param
     * @return  string  kode hash untuk disimpan di session-client
     */
    public function create_session()
    {
        # code...
    }

    public function update_session()
    {
        # code...
    }

    public function destroy_session()
    {
        # code...
    }

    public function check_session()
    {
        # code...
    }
}
