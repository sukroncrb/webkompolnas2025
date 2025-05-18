<?php 

namespace Abiesoft\Resource\Mysql;

use Abiesoft\Resource\Utilities\Config;
use Abiesoft\Resource\Utilities\Input;
use PDO;
use PDOException;
use Ramsey\Uuid\Rfc4122\UuidV4;
use Ramsey\Uuid\Uuid;

class DB {

    private static $terhubung = null;

    private
        $_pdo,
        $_query,
        $_error = false,
        $_hasil,
        $_hitung = 0;

    public function __construct()
    {
        try {
            $this->_pdo = new PDO(
                "mysql:host=" . Config::fromEnv('DB_HOST') . ";
                dbname=" . Config::fromEnv('DB_NAME'),
                Config::fromEnv('DB_USER'),
                Config::fromEnv('DB_PASS')
            );
        } catch (PDOException $error) {

            if (Config::fromEnv('MODE') == 'develope') {
                die($error);
            }

            exit();
        }
    }

    public static function terhubung()
    {
        if (!isset(self::$terhubung)) {
            return new DB();
        }
        return self::$terhubung;
    }

    public function query(string $sql, array $params = [])
    {

        try {
            $this->_error = false;
            if ($this->_query = $this->_pdo->prepare($sql)) {
                $x = 1;
                if (count($params)) {
                    foreach ($params as $p) {
                        $this->_query->bindValue($x, $p);
                        $x++;
                    }
                }
                if ($this->_query->execute()) {
                    $this->_hasil        = $this->_query->fetchAll(PDO::FETCH_OBJ);
                    $this->_hitung       = $this->_query->rowCount();
                } else {
                    $this->_error = true;
                }
            }
            return $this;
        } catch (PDOException $error) {
            if (Config::fromEnv('MODE') == 'develope') {
                die($error);
            }
            exit();
        }
    }

    public function where(string $action, string $tabel, array $where = [])
    {
        if (count($where) === 3) {
            $daftarsimbol = array('=', '>', '<', '<=', '>=');
            $kolom  = $where[0];
            $simbol = $where[1];
            $nilai  = $where[2];
            if (in_array($simbol, $daftarsimbol)) {
                $sql = "{$action} FROM {$tabel} WHERE {$kolom} {$simbol} ?";
                if (!$this->query($sql, array($nilai))->error()) {
                    return $this;
                }
            }
        }
        return false;
    }


    /*
        Contoh input ke tabel users
        Format Penulisan
        DB::terhubung()->input('users', array(['nama' => $nama, 'alamat' => $alamat ]));
    */

    public function input(string $tabel, array $kolom)
    {

        if(Config::fromEnv('ID_MODEL') == 'uuid'){
            if(isset($kolom['id'])){
                $kolom['id'] = $kolom['id'];
            }else{
                $kolom['id'] = Uuid::uuid4();
            }
        }

        if (count($kolom)) {
            $keys = array_keys($kolom);
            $value = null;
            $x = 1;

            foreach ($kolom as $k) {
                $value .= '?';
                if ($x < count($kolom)) {
                    $value .= ', ';
                }
                $x++;
            }

            $sql = "INSERT INTO {$tabel} (`" . implode('`, `', $keys) . "`) VALUES ({$value})";


            if (!$this->query($sql, $kolom)->error()) {
                return true;
            }
        }
        return false;
    }

    /*
        Contoh memperbarui data ke tabel users
        Format Penulisan
        DB::terhubung()->perbarui('users', $id, array(['nama' => $nama, 'alamat' => $alamat ]));
    */

    public function perbarui(string $tabel, string|int $id, array $kolom)
    {
        $set = '';
        $x = 1;
        foreach ($kolom as $nama => $value) {
            $set .= "{$nama} = ?";
            if ($x < count($kolom)) {
                $set .= ', ';
            }
            $x++;
        }
        $sql = "UPDATE {$tabel} SET {$set} WHERE id = '" . $id . "' ";
        if (!$this->query($sql, $kolom)->error()) {
            return true;
        }
        return false;
    }

    /*
        Contoh menghapus data dari tabel users
        Format Penulisan
        DB::terhubung()->hapus('users', array('id_users', '=', 'id'));
    */
    public function hapus(string $tabel, array $where)
    {
        return  $this->where('DELETE ', $tabel, $where);
    }

    /*
        Contoh menampilkan data awal dari tabel users
        Format Penulisan
        DB::terhubung()->tampilkan('users', array('id_users', '=', 'id'));
    */

    public function tampilkan(string $tabel, array $where)
    {
        return $this->where('SELECT *', $tabel, $where);
    }

    public function hasil(): array
    {
        return $this->_hasil;
    }

    public function json()
    {
        return json_encode($this->_hasil);
    }

    public function teks()
    {
        $result = '';
        foreach($this->_hasil[0] as $k => $v){
            $result = $this->_hasil[0]->$k;
        }
        return $result;
    }

    public function angka()
    {
        $result = '';
        foreach($this->_hasil[0] as $k => $v){
            $result = $this->_hasil[0]->$k;
        }
        return intval($result);
    }

    public function error(): bool
    {
        return $this->_error;
    }

    public function awal(): object
    {
        return $this->hasil()[0];
    }

    public function hitung(): int
    {
        return $this->_hitung;
    }

}