<?php
class ControllerExtensionPaymentMercadopago2 extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/payment/mercadopago2');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && ($this->validate())) {
			$this->load->model('setting/setting');
                        
                        if(isset($this->request->post['mercadopago2_methods'])){
                            $names = $this->request->post['mercadopago2_methods'];
                            $this->request->post['mercadopago2_methods'] = '';
                            foreach ($names as $name){
                                $this->request->post['mercadopago2_methods'] .= $name.',';
                            }            
                        }
			$this->model_setting_setting->editSetting('mercadopago2', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->redirect(HTTPS_SERVER . 'index.php?route=extension/payment&token=' . $this->session->data['user_token']);
		}
		
		$data['heading_title'] = $this->language->get('heading_title');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_all_zones'] = $this->language->get('text_all_zones');
		$data['text_yes'] = $this->language->get('text_yes');
		$data['text_no'] = $this->language->get('text_no');
		$data['text_mercadopago'] = $this->language->get('text_mercadopago');

		$data['entry_client_id'] = $this->language->get('entry_client_id');
		$data['entry_client_secret'] = $this->language->get('entry_client_secret');
        $data['entry_installments'] = $this->language->get('entry_installments');
        $data['entry_payments_not_accept'] = $this->language->get('entry_payments_not_accept');
        $data['entry_status'] = $this->language->get('entry_status');
		$data['entry_geo_zone'] = $this->language->get('entry_geo_zone');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');
		$data['entry_country'] = $this->language->get('entry_country');
		$data['entry_sonda_key'] = $this->language->get('entry_sonda_key');
		$data['entry_order_status'] = $this->language->get('entry_order_status');
		$data['entry_ipn_status'] = $this->language->get('entry_ipn_status');
		$data['entry_url'] = $this->language->get('entry_url');
        $data['entry_debug'] = $this->language->get('entry_debug');
		
		$data['entry_sandbox'] = $this->language->get('entry_sandbox');
		$data['entry_type_checkout'] = $this->language->get('entry_type_checkout');
		$data['entry_category'] = $this->language->get('entry_category');
		
        $data['entry_ipn'] = $this->language->get('text_ipn');
		$data['entry_order_status_completed'] = $this->language->get('entry_order_status_completed');
		$data['entry_order_status_pending'] = $this->language->get('entry_order_status_pending');
		$data['entry_order_status_canceled'] = $this->language->get('entry_order_status_canceled');
        $data['entry_order_status_in_process'] = $this->language->get('entry_order_status_in_process');
		$data['entry_order_status_rejected'] = $this->language->get('entry_order_status_rejected');
		$data['entry_order_status_refunded'] = $this->language->get('entry_order_status_refunded');
		$data['entry_order_status_in_mediation'] = $this->language->get('entry_order_status_in_mediation');
                
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		$data['tab_general'] = $this->language->get('tab_general');

 		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

 		if (isset($this->error['acc_id'])) {
			$data['error_acc_id'] = $this->error['acc_id'];
		} else {
			$data['error_acc_id'] = '';
		}

 		if (isset($this->error['token'])) {
			$data['error_token'] = $this->error['token'];
		} else {
			$data['error_token'] = '';
		}

		$this->document->breadcrumbs = array();
		
   		$this->document->breadcrumbs[] = array(
			'href'      => HTTPS_SERVER . 'index.php?route=common/home&token=' . $this->session->data['user_token'],
			'text'      => $this->language->get('text_home'),
			'separator' => FALSE
   		);

   		$this->document->breadcrumbs[] = array(
			'href'      => HTTPS_SERVER . 'index.php?route=extension/payment&token=' . $this->session->data['user_token'],
			'text'      => $this->language->get('text_payment'),
			'separator' => ' :: '
   		);

   		$this->document->breadcrumbs[] = array(
       		'href'      => HTTPS_SERVER . 'index.php?route=payment/mercadopago2&token=' . $this->session->data['user_token'],
       		'text'      => $this->language->get('heading_title'),
      		'separator' => ' :: '
   		);

		$data['action'] = HTTPS_SERVER . 'index.php?route=payment/mercadopago2&token=' . $this->session->data['user_token'];

		$data['cancel'] = HTTPS_SERVER . 'index.php?route=extension/payment&token=' . $this->session->data['user_token'];

		if (isset($this->request->post['mercadopago2_client_id'])) {
			$data['mercadopago2_client_id'] = $this->request->post['mercadopago2_client_id'];
		} else {
			$data['mercadopago2_client_id'] = $this->config->get('mercadopago2_client_id');
		}

		if (isset($this->request->post['mercadopago2_client_secret'])) {
			$data['mercadopago2_client_secret'] = $this->request->post['mercadopago2_client_secret'];
		} else {
			$data['mercadopago2_client_secret'] = $this->config->get('mercadopago2_client_secret');
		}

		if (isset($this->request->post['mercadopago2_status'])) {
			$data['mercadopago2_status'] = $this->request->post['mercadopago2_status'];
		} else {
			$data['mercadopago2_status'] = $this->config->get('mercadopago2_status');
		}

		
		$data['category_list'] = $this->getCategoryList();
		if (isset($this->request->post['mercadopago2_category_id'])) {
			$data['mercadopago2_category_id'] = $this->request->post['mercadopago2_category_id'];
		} else {
			$data['mercadopago2_category_id'] = $this->config->get('mercadopago2_category_id');
		}
		
		
		if (isset($this->request->post['mercadopago2_url'])) {
			$data['mercadopago2_url'] = $this->request->post['mercadopago2_url'];
		} else {
			$data['mercadopago2_url'] = $this->config->get('mercadopago2_url');
		}
                
		if (isset($this->request->post['mercadopago2_debug'])) {
			$data['mercadopago2_debug'] = $this->request->post['mercadopago2_debug'];
		} else {
			$data['mercadopago2_debug'] = $this->config->get('mercadopago2_debug');
		}
                
                
		if (isset($this->request->post['mercadopago2_sandbox'])) {
			$data['mercadopago2_sandbox'] = $this->request->post['mercadopago2_sandbox'];
		} else {
			$data['mercadopago2_sandbox'] = $this->config->get('mercadopago2_sandbox');
		}
		
		
		$data['type_checkout'] = $this->getTypeCheckout();
		if (isset($this->request->post['mercadopago2_type_checkout'])) {
			$data['mercadopago2_type_checkout'] = $this->request->post['mercadopago2_type_checkout'];
		} else {
			$data['mercadopago2_type_checkout'] = $this->config->get('mercadopago2_type_checkout');
		}
                

		$data['countries'] = $this->getCountries();
		$data['installments'] = $this->getInstallments();

		if ($this->config->get('mercadopago2_country')){
		    $data['methods'] = $this->getMethods($this->config->get('mercadopago2_country'));    
		}
              
		if (isset($this->request->post['mercadopago2_methods'])) {
			$data['mercadopago2_methods'] = $this->request->post['mercadopago2_methods'];
		} else {
			$methods_excludes = preg_split("/[\s,]+/",$this->config->get('mercadopago2_methods')); 
			foreach ($methods_excludes as $exclude ){
				$data['mercadopago2_methods'][] = $exclude;     
            }   
                //    var_dump($this->data['mercadopago2_methods']);die;
                    
			// $this->data['mercadopago2_methods'] = $this->config->get('mercadopago2_methods');
		}
                
		if (isset($this->request->post['mercadopago2_country'])) {
			$data['mercadopago2_country'] = $this->request->post['mercadopago2_country'];
		} else {
			$data['mercadopago2_country'] = $this->config->get('mercadopago2_country');
		}
                
                
		if (isset($this->request->post['mercadopago2_installments'])) {
			$data['mercadopago2_installments'] = $this->request->post['mercadopago2_installments'];
		} else {
			$data['mercadopago2_installments'] = $this->config->get('mercadopago2_installments');
		}

		if (isset($this->request->post['mercadopago2_order_status_id'])) {
			$data['mercadopago2_order_status_id'] = $this->request->post['mercadopago2_order_status_id'];
		} else {
			$data['mercadopago2_order_status_id'] = $this->config->get('mercadopago2_order_status_id');
		}

		if (isset($this->request->post['mercadopago2_sort_order'])) {
			$data['mercadopago2_sort_order'] = $this->request->post['mercadopago2_sort_order'];
		} else {
			$data['mercadopago2_sort_order'] = $this->config->get('mercadopago2_sort_order');
		}
		if (isset($this->request->post['mercadopago2_order_status_id_completed'])) {
			$data['mercadopago2_order_status_id_completed'] = $this->request->post['mercadopago2_order_status_id_completed'];
		} else {
			$data['mercadopago2_order_status_id_completed'] = $this->config->get('mercadopago2_order_status_id_completed');
		}

		if (isset($this->request->post['mercadopago2_order_status_id_pending'])) {
			$data['mercadopago2_order_status_id_pending'] = $this->request->post['mercadopago2_order_status_id_pending'];
		} else {
			$data['mercadopago2_order_status_id_pending'] = $this->config->get('mercadopago2_order_status_id_pending');
		}

		if (isset($this->request->post['mercadopago2_order_status_id_canceled'])) {
			$data['mercadopago2_order_status_id_canceled'] = $this->request->post['mercadopago2_order_status_id_canceled'];
		} else {
			$data['mercadopago2_order_status_id_canceled'] = $this->config->get('mercadopago2_order_status_id_canceled');
		}

		if (isset($this->request->post['mercadopago2_order_status_id_in_process'])) {
			$data['mercadopago2_order_status_id_in_process'] = $this->request->post['mercadopago2_order_status_id_in_process'];
		} else {
			$data['mercadopago2_order_status_id_in_process'] = $this->config->get('mercadopago2_order_status_id_in_process');
		}

		if (isset($this->request->post['mercadopago2_order_status_id_rejected'])) {
			$data['mercadopago2_order_status_id_rejected'] = $this->request->post['mercadopago2_order_status_id_rejected'];
		} else {
			$data['mercadopago2_order_status_id_rejected'] = $this->config->get('mercadopago2_order_status_id_rejected');
		}
                if (isset($this->request->post['mercadopago2_order_status_id_refunded'])) {
			$data['mercadopago2_order_status_id_refunded'] = $this->request->post['mercadopago2_order_status_id_refunded'];
		} else {
			$data['mercadopago2_order_status_id_refunded'] = $this->config->get('mercadopago2_order_status_id_refunded');
		}
		
		if (isset($this->request->post['mercadopago2_order_status_id_in_mediation'])) {
			$data['mercadopago2_order_status_id_in_mediation'] = $this->request->post['mercadopago2_order_status_id_in_mediation'];
		} else {
			$data['mercadopago2_order_status_id_in_mediation'] = $this->config->get('mercadopago2_order_status_id_in_mediation');
		}
		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		$this->template = 'extension/payment/mercadopago2.tpl';
		$this->children = array(
			'common/header',
			'common/footer'
		);
		
		//$this->response->setOutput($this->render(TRUE), $this->config->get('config_compression'));
		$this->response->setOutput($this->load->view('extension/payment/mercadopago2', $data));

	}

	private function getCountries() {
            
                $url = 'https://api.mercadolibre.com/sites/';
                $countries = $this->callJson($url);
		
   		return $countries;
	}
        
        private function getMethods($country_id) {
            
            $url = "https://api.mercadolibre.com/sites/" . $country_id .  "/payment_methods";
   
            $methods = $this->callJson($url);
            return $methods;
          }
       
       private function callJson($url,$posts = null){

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//returns the transference value like a string
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/x-www-form-urlencoded'));//sets the header
            curl_setopt($ch, CURLOPT_URL, $url); //oauth API
            if (isset($posts)){
		curl_setopt($ch, CURLOPT_POSTFIELDS, $posts);
            }
            $jsonresult = curl_exec($ch);//execute the conection
            curl_close($ch);
            $result = json_decode($jsonresult,true);
            return  $result;          
       }
	
        private function getCategoryList(){
		$url = "https://api.mercadolibre.com/item_categories";
		$category = $this->callJson($url);
		return $category;
	}
	
	private function getTypeCheckout(){
		
		$type_checkout = array("Redirect","Lightbox", "Iframe");
		
		return $type_checkout;
	}
        private function getInstallments (){	
            
                $installments = array();
                
                $installments[] = array(
                    'value' => 'maximum',
                    'id' => '24');
                
                $installments[] = array(
                    'value' => '18',
                    'id' => '18');
                $installments[] = array(
                    'value' => '15',
                    'id' => '15');
                              
                $installments[] = array(
                    'value' => '12',
                    'id' => '12');
                   
                $installments[] = array(
                    'value' => '9',
                    'id' => '9');
                   
                $installments[] = array(
                    'value' => '6',
                    'id' => '6');
                   
                 $installments[] = array(
                    'value' => '3',
                    'id' => '3');
                   
                 $installments[] = array(
                    'value' => '1',
                    'id' => '1');
            
                 return $installments;
              }
                
                   

	private function validate() {
		if (!$this->user->hasPermission('modify', 'extension/payment/mercadopago2')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->request->post['mercadopago2_client_id']) {
			$this->error['error_client_id'] = $this->language->get('error_client_id');
		}

		if (!$this->request->post['mercadopago2_client_secret']) {
			$this->error['error_client_secret'] = $this->language->get('error_client_secret');
		}

		if (!$this->error) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}
?>
