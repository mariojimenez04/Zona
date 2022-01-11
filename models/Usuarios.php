<?php

    namespace Model;

    class Usuarios extends ActiveRecord {
        protected static $tabla = 'usuarios';
        protected static $columnasDB = ['id', 'nombre', 'apellido', 'telefono', 'email', 'password', 'imagen', 'created_at', 'updated_at', 'token', 'confirmado', 'admin'];

        public $id;
        public $nombre;
        public $apellido;
        public $telefono;
        public $email;
        public $password;
        public $imagen;
        public $created_at;
        public $updated_at;
        public $token;
        public $confirmado;
        public $admin;

        public function __construct($args = [])
        {
            $this->id = $args['id'] ?? null;
            $this->nombre = $args['nombre'] ?? '';
            $this->apellido = $args['apellido'] ?? '';
            $this->telefono = $args['telefono'] ?? '';
            $this->email = $args['email'] ?? '';
            $this->password = $args['password'] ?? '';
            $this->imagen = $args['imagen'] ?? '';
            $this->created_at = date('Y-m-d H:i:s');
            $this->updated_at = '';
            $this->token = $args['token'] ?? '';
            $this->confirmado = $args['confirmado'] ?? '0';
            $this->admin = $args['admin'] ?? '0';
        }

        public function validate_New_Account() {
            
            if(!$this->nombre) {
                self::$alertas['error'][] = 'El campo nombre es obligatorio';
            }
            
            if(!$this->apellido) {
                self::$alertas['error'][] = 'El campo apellido es obligatorio';
            }
            
            if(!$this->email) {
                self::$alertas['error'][] = 'El campo email es obligatorio';
            }
            
            if(!$this->password) {
                self::$alertas['error'][] = 'El campo password es obligatorio';
            }

            if( strlen( $this->password ) < 7 ) {
                self::$alertas['error'][] = 'El campo password tiene que tener minimo 6 caracteres';
            }
            
            return self::$alertas;
        }

        public function user_Exists() {
            $query = "SELECT * FROM " . self::$tabla . " WHERE email = '" . $this->email . "' LIMIT 1"; 

            $resultado = self::$db->query($query);

            if ($resultado->num_rows) {
                self::$alertas['error'][] = 'Usuario ya registrado';
            }

            return $resultado;
        }

        public function hash_Password() {
            $this->password = password_hash($this->password, PASSWORD_BCRYPT);
        }

        public function create_Token()
        {
            $this->token = uniqid();
        }
    }