$url= $this->generateUrl('office_brain_search_bundle_search');
        //  $this->redirect()
            //  echo '<pre/>';print_r($_SERVER['QUERY_STRING']);
              $redirect = $url.'?'. $_SERVER['QUERY_STRING'];
