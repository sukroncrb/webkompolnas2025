<?php 

namespace App\Schema;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Mysql\Schema;
class pengunjung extends Schema 
{

    public function buattabel()
    {
        $schema = new Schema;
        $schema->paragrap(nama:'info');
        $schema->teks(nama:'device', default: 'NULL');
        $schema->teks(nama:'os', default: 'NULL');
        $schema->teks(nama:'ip', default: 'NULL');
        $sql = $schema->create('pengunjung');
        DB::terhubung()->query($sql);
        $this->buatdata();
    }

    public function buatdata()
    {
        
        DB::terhubung()->input('pengunjung', [
            'id' => '032f2482-823c-4927-9ced-50a3ac31638a',
            'info' => '7CD+2rQVV+Ce5f3t8teQ2nFuUnB4VldXd0JVNGRsU1NJRXgxalJuMnhBVU12eUEvOWlEaXVRc3BJS3dKWjVBZG5pS0pBdlJRa2hSdGxnZFRnRVRrS3M2Rmg0cFA2WVdYNGtHL293PT0=',
            'device' => 'Mobile',
            'os' => 'Android',
            'ip' => '15.236.144.144',
            'dibuat' => '2025-05-05 21:32:36',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '04c1d6be-fb75-4b0c-acb1-95154aaafbf6',
            'info' => '5deZlqFRRiIsJMwe2MaAzkc3dkZGQ3c2akt5Zm1CRkc1QUF5M0lJS2RpempSOFUzV3YreEdqTjNUblZDa0l6SUpvRmdMOXFRblN0ZmpBamJ0SlUrQmJQOHVKUEZhczJhem1VOUVNdGgvekVUMHFoUm9jdThrK3ZYaXB3PQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '35.84.132.93',
            'dibuat' => '2025-05-12 17:28:09',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '051c6f1c-613e-40b1-b9f9-fc38692df360',
            'info' => 'c77tAnc2bdFohNhWIwARymhLZnc0VUx6ZElJK0FHL1ZpYWR2ZFlsU1dsbjRuV0FjOXVId2RpRGt1aVNacUpGMDBsSnlJNDY0Tk5ENUdyMGw3NFlHQjJqUXk2SXpQeU5iWFVSb204WXJCYnhaSjl2d1BNTWV4em53VXp3PQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Windows',
            'ip' => '116.68.160.138',
            'dibuat' => '2025-05-07 15:59:56',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '052db774-8260-484d-89f0-b1aa066c2bc5',
            'info' => 'E/4FbWR1D2M/Z2y1FfLubmNER2dzeDBFSi9UekZZQnRGREpvWFNZRjR1TkdEU01ULzNCUnRRS0QwNGo5dlRKSnJJVlkvUXdKWGVTRzhpMTIwOTI2YzVYdWlDTkxJTE9OM1NnZTBmb09aSFU0WTlGYllNK3lEVElyeEpFPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '116.68.160.138',
            'dibuat' => '2025-05-06 11:38:15',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '06f2cb48-e972-44d3-80dd-127a98f4ce37',
            'info' => 'N/HsU5lyfScW3WmvniZBCWtRZGNGeHZHWVB0c3JuOG1RMDYxTHNlNHFhNXp6dmVQc3lOcUdGTnp5VmFwQjJUY3FQSDBMZ3BZWUM5YUx0MGdsdDFDN2UvSndEWWN0TkNPRHZMNzZ1SHQ4WEpmSWVOSzIzSGhGWDlBS1lFPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '149.57.180.180',
            'dibuat' => '2025-05-01 13:08:22',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '07f9baef-77da-4212-89c3-fed0a6c84b01',
            'info' => 'RdHB399YWkg3S2VqAYQJt0Q5UzlyTWpSTnBuR1BoU0JYelRsUCs2cVpaNlU2VDk5NkNmR0l3d2lwMWQ5MmsrS1M2enlUdDhKcmhqTEpGSVZJZDk3T1dsSnpyTzk5Q05hOFVWUEJIREp2QTIrUzZCeWdKMjdER1E0REdNPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Windows',
            'ip' => '116.68.160.138',
            'dibuat' => '2025-05-06 11:41:14',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '1687ad88-e2b4-43a0-8b93-60b2fde36781',
            'info' => 'iMH/q0rMTX6pHl7wazhSV0hlUmt1TTVYa25lRityRHVXNk9ZSmM0b3RuRHJ1NFFZUGhpMklMMHpNK3pITlZ3ditkbUU2QkViWEhxZHhMTWVyRjhVZWI4SENFa2g5a0RLUm1kMFIwdmZaaitDY0k0MDhCSG9BS2hEeVJJPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '149.57.180.55',
            'dibuat' => '2025-05-01 13:07:55',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '21bc24a8-0210-4efc-b78c-3aa21d637328',
            'info' => 'Ht3GRB0s8AiNAu78970RNlpVSFdmajRzeU85eTBFd2JMZUlUUGdCOUZBdXRyVzNzRUZzMWdCb2liRTVvVTBwUXI3TkY2VTBEZDJLcytpK3ZnQU5Hb2EvZXNrUkJuZnUzeGpaNmZwbDVseElUUm5JV3ZrdDB2Z2t0MS9JPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '34.255.181.234',
            'dibuat' => '2025-05-11 09:33:17',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '23edebfa-6adf-476c-869a-f1ceb0a4fd1d',
            'info' => 'XigrMXa03MYTKZFxHQSrFDhROENpejRXeFhqc3BsbHZFVitDdHNhbFh0OXdhMUFKeStjc2M4UHR3UFZWRWRiWEhiaFZTL2RadkI3cmZSV0tRVHNKWXF0VTBQMzhCUWJSZnoxdXpBPT0=',
            'device' => 'Mobile',
            'os' => 'Android',
            'ip' => '180.252.163.56',
            'dibuat' => '2025-05-01 04:44:53',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '2e22663f-ca7c-4276-b8d4-6591300447cd',
            'info' => '8CIA7kFtPyfUiBV3zF+cNHp3OXhOUlUranFNZ1NJK2VSWEpZUW9XRmdtSU82YVZjSHRwK0Q3R0pnVTVXSDZnenJtSVk0YmxFenk4S1Y1ZlpYMVZhZXEzT0o1RlhMKzkxSytuM1JRPT0=',
            'device' => 'Mobile',
            'os' => 'Android',
            'ip' => '116.68.160.138',
            'dibuat' => '2025-04-28 09:57:17',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '2f6715a3-c38f-4254-baee-000b7ddba95d',
            'info' => 'AaaI8tlPKs0N8R1picDD3VFTUjI0SHVZT3NrSi83WWlRVWhic09tajVMbEl3K1hRakZCOG1wM2xSd3ZCeVJHdTYvbzJNSC8xSWQ2cVV3c3pydWR2b1p2eXhNWkVXTlhKTEtjRitHSWtQT2xuVzZzZHBUTUlaa3FoYVkwPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '180.252.163.56',
            'dibuat' => '2025-05-01 00:39:27',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '2fb3eb8e-3f37-4487-9e82-5aac3a8e060b',
            'info' => 'rUxSbJkHTRDVQeICsFanmE9sYVhyYVoweExwQlVRdHZQM1N0YXYxUS9tVmpGRm43bUhxR3dYMkRJRlhlcWl1QWc3OVZRWHNKalMwaElzY2tIVnFXM1ZhazRqc2VyeE5BM01kZHRPY3lSSTBDYUxnWUpKdUNZeG55Ri80PQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '137.184.137.47',
            'dibuat' => '2025-05-10 16:57:58',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '34857617-a07f-451f-b0df-e46f93e579fa',
            'info' => 'k0zgxPCbkFl3rSfqpKbQzXRLSGV4WFRRUEpYNE03c3NMZXRpV2JWazE1STJRdEZlc3dKQlZSdWc4V2dCSXZESE5TMkh6c3ZMNHMrcWpRUWN5ekVIK25MK05COWc0UlJVYzFsVFVCK0E0Y2ZadkdyRTBvdzFIUmZVVUpzPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '180.252.163.154',
            'dibuat' => '2025-04-28 02:48:17',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '3650553c-e6da-4de6-a98e-4f00e33c653e',
            'info' => 'Xxme74J5FnGj2483dXJl2W9HZnowS2hDenNacnhDOXFEWUdEK3B0RlBPbzkyS0p2dWFoNmtQT3pUaGsvR0d5SW5CK3VOSEpPVjBFc2Y0UklOV1NtbG9DTUFYREZjS3YzQ3V5bVlnPT0=',
            'device' => 'Mobile',
            'os' => 'iOS',
            'ip' => '141.148.153.213',
            'dibuat' => '2025-04-28 11:36:19',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '3680d4ee-f2f8-48ff-abfa-5ec8023a5305',
            'info' => 'DyfG2yq9IdMbyEdgB7GA6085dHozTWNkdE1Vc0dFUGUwdjFWdldSTDMxUlBnYUNpTXUrNWZoUk5TRVJHcXo0NWZ0eS9BZDF0dG5QdHp2SmU5Zkx0U0xYQkxBN2ZXb2tJMHJzNml1dkFkN1NvSFF6dXNvRXFDa2dnWm9BPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '180.252.163.76',
            'dibuat' => '2025-05-04 01:22:13',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '39a737c0-ea22-4fce-a5cf-2261bb8f8faf',
            'info' => 's1ad06a1oDXiimWTrfcp50UvNDVoMWgyeHN5cDRQWHpTOEtsSlVFRHZPanNFQVhoOTM0cGU2TFFNVDR2WXl3alN5cmxVYXRhNTRvcld0ZGkvbm9UcUN5Q3h5TzNzMFlVbDZ5b1JTL1ppaDNoR2tjRmFMU0YzbnRTbjhNPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Windows',
            'ip' => '16.78.43.158',
            'dibuat' => '2025-05-12 12:12:50',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '3baaad6e-6e08-42b1-982a-84166ba5bf75',
            'info' => 'GPtxK9DquVGYlEfPPWKFDzZsajk4eVFVbjBDcmU1NytndFkrV2lpZm5CeXo2SlMrMEdaM2RPR3hCaVZPRGNjWk9KV05GdUhCSjZuWmtrZUZQZzhSQi9ic0tJVmNScGQzWERIdmRyQ3g5SEJPRGNuYUZtZmxWTUF3QndRPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '47.236.233.162',
            'dibuat' => '2025-04-28 04:41:58',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '3c2380a6-5912-4ef2-8df3-50224b3dd23d',
            'info' => 'U0uiGkf6E5K5yon7AeciFUU1ckk1ejhwaXZWY0R2cGlmRDRvUkNvQlpmUHlQbWxBUFJoYkRWeHUxMXFHTkdlRUVTeHF0LzJXdys4c25KR3BvVXA2VXoxWkhkclhZQkh6M2tPWGJJN0lkUFVKY3VwWFZUc0cwb29VblBBPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '127.0.0.1',
            'dibuat' => '2025-04-27 13:09:31',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '3e0a9c73-1e23-4ce8-99b5-17968253a121',
            'info' => 'JYqArjJ+mZstVZALjqNx8XJncHNRWXVkbHhkRkhKcUtjZ0J3ODhpMDBGdVR5Z0VsZEx2SnFrZWsyS2tLRTFVM2Y0eG1sN0dCNUhDSC9TTVhGQnFPbFN0Rms3QktYa0hySzBsZ0ZnPT0=',
            'device' => 'Mobile',
            'os' => 'iOS',
            'ip' => '141.148.153.213',
            'dibuat' => '2025-04-28 11:35:00',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '414b1fa4-6249-40bd-b53b-a9538fd9537a',
            'info' => 'kXDA403U7QpQK7f1aXmHP3YxNUZKT0YzdlVZR1BNZXd3c1dMMmhvVjVrSXU0aVV2aE9oclZLTHZ3T0s4ZFpDQUl3azFQcHhTWDBxWW4wVitrcVVCZXhxQTkxcUNzWEp3SW5PbSthNDBxY3h5eEdSRUptMUFjV3hOMHY4PQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Windows',
            'ip' => '180.252.169.80',
            'dibuat' => '2025-05-01 18:36:54',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '43157154-67ee-406d-b11b-93169b6c0742',
            'info' => '/0pKh4pl/ivVKYCrYsGMt0tZbiszVkozd3RzSVp4VUkwRXlYQmpmeHhadVo0TmVhclhhTWY1WWpHWUFvMG5yV2ExNVhGQ3dGVzBuZUl0bkdPaGk5R3Vxc3BySkhUS1FFanpmRXlmN3JmYWVweDd4WE4rVzNPeElMaElBPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Windows',
            'ip' => '116.68.160.138',
            'dibuat' => '2025-05-06 13:43:04',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '43dc4de0-742f-46c3-9267-aa9fbaea4048',
            'info' => 'a0HDQbLCX9X8z0w0CBlqrEE0cnJHZ25nVDJ4YkdUd2V1bkE4NmdnZitOZm1HeitqWlFxb3FZYUY0d2FEaDdyR0RFVE5tL3owY2YrYTNTcnFrSFlRS2tBQng3bk9zS2FBWXViYndWNE9JZ09DNFJHUUdmOXRHVzB6TmpVPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '180.252.163.56',
            'dibuat' => '2025-05-01 23:18:42',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '44cdb502-ce09-4b90-be88-a033fa4838b5',
            'info' => '7k07+ahGDhSExzqDjzaGA2ZPclgvQ0J0VFA5WExieXJtMWVGOVNTSDRVMUxYQWEvZDljTkhIMExpVHdHU1l3bFVTeXlFeXE5ZXhvTDlSdThac2NNaldzci8xeDV6elBDRDZHNnplS1VlKzlzcERhRG9Yemg4YXpXOEFFPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '207.154.233.131',
            'dibuat' => '2025-04-29 09:05:55',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '4be1e850-ca21-4492-9a76-03e44a4344a7',
            'info' => '/44oHM56t5B8j6BbWoRi/HlLVzE0SWJPRUtkNkk1WUVRTnNUNTFBSlMwenhkeVhkZGg1NnNONE9CeHNMR0RqYVJTdDBoVFJHSzNJWDBPRDdtSnRmY3ovU1REK2JuWXhrdE9ZUGNnPT0=',
            'device' => 'Mobile',
            'os' => 'iOS',
            'ip' => '82.145.215.206',
            'dibuat' => '2025-05-01 00:20:48',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '4f10f8f7-97e8-4468-8cc7-f4fe672d0d02',
            'info' => 'u4Q14JbUMQkVMKok/SsaOmZMZnVUdXVIU2JydkhyWG5MM0pFV2JMWlVtbDVCOTY3Ris4aDBuQnFuSThxMUxyekVtVHM2dGxUUVhzYWlsRDhsT0VEVzRMZExNSmxUQlBmTWZvSVZRPT0=',
            'device' => 'Mobile',
            'os' => 'iOS',
            'ip' => '141.148.153.213',
            'dibuat' => '2025-04-29 03:31:54',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '559001fc-5317-46be-a653-581f1151ca9c',
            'info' => 'EC/gDjsfUKG6eyV3J2tCUDBQSEd5ZEVyQ3I3dU5Ud1pVNm5xV05EcG1HOXB4TkJGV0lkb2J2WXlRczRnVHF1emxQNVRTRytqNG9tVVVKRGtmSEVDSHJRUm5JeHN5clZ0Mlp6UldiOG5Rc09nSk4vZ0hLenNiaHhjNm04PQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '23.27.145.153',
            'dibuat' => '2025-05-02 20:41:37',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '5975276d-dd90-4884-8161-6afd50f9a178',
            'info' => 'CG7CMolU7DNW6yCo557kOjd5YjkxdEZwbXExMkpOdDdBTUluUHBUZUU4MGRZK0x4OE5MN0ZqK3ByclNZdm9qSGJwNUtwTlFsaXlXdzg0emx5UGtoazhsTW41ZlY1bFNCbFJGUGdvTjRRKzhyaUJOOFNwUXRwU3NLSmVVPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Windows',
            'ip' => '43.218.109.236',
            'dibuat' => '2025-05-12 20:15:58',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '5c17cebd-a665-4635-91aa-7856d4745a40',
            'info' => 'YVmRuKfoDmNR+VodbCWjekNMeGcvK0NwazNrRlMxdUpXZlVoZm5walFqSzhmbm1waXpFN1BDOTRWckw4ZmVMWDBVU1dTem1YYWIrWGZPbnl2ZVpTZGFKMjhyV2Y1ZllUWGtzY1JtQnR2Y3FWVXRLUVc2SERKeUh6S1djPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '198.235.24.145',
            'dibuat' => '2025-05-11 16:02:27',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '61526b74-e070-4c5e-afe3-183ec2b49e17',
            'info' => 'a252vrjJRnVUjjsM4wysSzMwckc3YkpRSUVENTI3ampnRVFLelpzZEdWMElzMDRERHdhVGVOUGhHSy9PMGZFTXBta1VKSlhpdTlDeW4vMVNEdDEzaDNNb2lvVlA4MW5iZUVyU2UxRC8vZGVNOWw2MjBSaUpDR3JjOGl3PQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '127.0.0.1',
            'dibuat' => '2025-04-28 00:28:43',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '6720a1a0-85a3-4ab7-bfe4-397240e25c87',
            'info' => 'eDMIEepHVALrSOEiW1VOuGUyckFJSUdXVDl6ZWlOdzJBN2toekhxVjByelhLQ1Y0MHJmQjhXQk5RWTlDVWRiOTRvVHdPZEMyTzJSeC9ITUdjQnF4Zys0Nk1kVnlqNGdBOCtYN1VNT0Z2b0tCQzZ1NjdBYjlwL1QvcG5NPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '180.252.163.56',
            'dibuat' => '2025-05-01 00:20:46',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '67b7e8d0-9d1e-4deb-b3c0-cf79afb0aa8c',
            'info' => 'f/9vj9qDR1gknwjGT64BkU80dUlOOGFhSU1GR3JzVUw0ekhUYmJoNHF2RmxGSHhmWEs5NTh0Y1djYUxMb2xYdTYwSGxrUHZvZHI4QmJYRyszZEVDNzVXUWpaK0NsTVplOXgzaFZ3PT0=',
            'device' => 'Mobile',
            'os' => 'iOS',
            'ip' => '141.148.153.213',
            'dibuat' => '2025-04-29 03:39:31',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '6af5291b-98b4-4292-8eb5-7499c0fe8283',
            'info' => '8W/qRWv1ZvwBZscoBQw8TngrOVJQczVrc1VWcDVYOS92SHFMRUtUNGFvZXBUWStTYm9FZDVteFByL2h2U1RkZUNTWEpDSDBLV3c0MjJ6ZHl2SDV1OHFlMzZqckcwS0JPdDhJM1ZDc3JGN0kxSDRleVcwbjNkUTFiQ2ZRPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '104.152.52.137',
            'dibuat' => '2025-04-30 05:37:26',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '6bb2c7e5-f2c9-4f91-8364-67fc45e1045a',
            'info' => 'lTs8JRNfbAJ4hX+A3R74aFJBRzhrVnliZzRGM0htbjdnQWg4S1B5dHNTeHU2dnZ6R05nSFVacitqZTB2Sm5pTXRuekUxWXBmYXlZUmpncCtYZlpOOU5TTW4xU24zdTNJVG1WS2RmSE55a3lXL1ZxZjJjMTB6UFN3ZG9JPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '103.156.164.127',
            'dibuat' => '2025-05-06 02:48:08',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '70b247e1-9434-4177-a720-4cb84788e30b',
            'info' => 'MuxLl+AeBx3jAUTI2qiBYzZLMDJQVldLVzZ1eUQ0SnhIRjQvSFh3VFBQclpCTTJBeWU5bWFvZmRxcG1zVDlQTUV1ZWtmeDQ3N3pTdTl2Si9OdVREbS9qUy9Pb3F2UU9QdG1qbEt3PT0=',
            'device' => 'Mobile',
            'os' => 'Android',
            'ip' => '192.178.15.39',
            'dibuat' => '2025-05-06 11:38:37',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '72416b13-004e-4a8c-a95e-5b3a1df2e728',
            'info' => 'RsYFxthjDV2Z/gEHkzfK/TFJOFJ2M3VzU1RWeFMwbUZHMjVjaXRSS21nUW1XbDhuYW94UHBRbUE0MFJDNmFjT0xKL0lsUW90SHVRejcwTEFKVkxwZFV3YWpHa21yUHVaeUZNMmdCdzhrSis2bWJ1ZVNBT3FTNm93UUZvPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '51.254.49.107',
            'dibuat' => '2025-04-30 05:17:52',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '74e8674b-8d09-4369-b98e-87bec7c933f8',
            'info' => '8Y1ZVsnOWUsMqSlXIGyH+isvbjdMR28vQnNxYWF1VFFkMnd6Q2h0TmNpK3dLSzBCNkIzTkwzMGtjd05TNVF3WktZTzQrdWc4dTM5WDBuN1pYcCtqd1poQmVoTVpnR2lLY09vVXl3PT0=',
            'device' => 'Mobile',
            'os' => 'Android',
            'ip' => '103.156.164.127',
            'dibuat' => '2025-05-06 13:42:17',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '77f34dde-2a1a-4779-8cfb-8a8b9abc9cb9',
            'info' => 'Ze0phpEr+yNlA48UA48f/jVBNUNWcXVhQm9pUWY5ZzAxSnAvd3Q5cmNoWG5JRTlxUDZiNDZyekV6b0xtckx1UHVSQy9NeEJ3UHJ3aENiWjZJb1YxenlSSnNPUnI4aXJUdDBqc052eEI5NHV0S1AvWGpiZTBsaXBncXo4PQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Windows',
            'ip' => '116.68.160.138',
            'dibuat' => '2025-05-06 14:56:33',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '7a123d40-3398-4c3e-8d64-ba20dd7fcd01',
            'info' => 'pVUPWk7i7Fbox/yelEc9BFF3S3ZDUVlyZzczeUlGUUUrZC9hRnI5bmZBZ1RrdFdUQWhFZEYvUXUreXdlVWc0LzFyQUR4V0lCZTA5QW56QWkxVTZIUFJnaGZXRDYrQXVmM29MV3dBPT0=',
            'device' => 'Mobile',
            'os' => 'iOS',
            'ip' => '141.148.153.213',
            'dibuat' => '2025-04-29 03:31:52',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '7ce5bcc2-19c9-4625-add8-c48b51cae38f',
            'info' => 'C+Q3jYeFQ7zE2Luo0kUAsmpwQktudEVtRTVKT0o3L1FtUFNLY3NlY0dNT0VISnpCR1UranZOL1BUUjc3d2YvSGIwb1dLWmlMbVdrMm1hUm41Ny9oY2xScG9KN1ZyTWJUWG5DUjdBPT0=',
            'device' => 'Mobile',
            'os' => 'Android',
            'ip' => '103.156.164.127',
            'dibuat' => '2025-05-06 13:42:18',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '7d04508d-823d-485d-888f-5b72c7f57d17',
            'info' => 'U3ZEuoJI+OthnKFi0dmH5UZJUDdVUTVEOEs4ZjVZc1FZN2VBN2t6cW9jcy9Ud09zQUYxRlNoK3poMTFPQlVxL04xQWVUWEpmRzd6Yk9FT2VFbmZKcnArUkJVMWs0ZzNRZlYvVnZNbFArTWdKNDh2SU9iMjNUbFg1SDVvPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Windows',
            'ip' => '116.68.160.138',
            'dibuat' => '2025-04-28 09:54:44',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '7f3f5082-a8ed-4e70-9663-1a351f0160b8',
            'info' => 'hDnFSnKKE/yFtkM7UcrkdjVJNnJkS3pZSmlBUmkvaTBEeHkwa2VqWDU3L0lvYTM0eWlUWGxTd0ZHVGU2T1NaVEtGajd2MUQ2ejVMSVdWQXN2eVZQKzhteDhIbDAwUzJrREEycEdRPT0=',
            'device' => 'Mobile',
            'os' => 'iOS',
            'ip' => '141.148.153.213',
            'dibuat' => '2025-04-29 03:39:22',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '81479fb9-9462-42cd-af08-8e2332e70d8a',
            'info' => 'z3YmUiNA8YsQzfk/SfmLCUloazRYNWMwMEg5UVk4ZFp5RWpMWll0QU5Jaks4MThYU1Ntc0V4dzBBTHVWUHFwd24rYkhZbkJ2RTBWbXh2TUEyL0xwa3Jmc0RVMlpTRHJkVzM0ZXRRPT0=',
            'device' => 'Mobile',
            'os' => 'Android',
            'ip' => '64.233.173.229',
            'dibuat' => '2025-05-06 11:38:36',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '85c20bf6-61cc-46ea-bbc5-06e92d97c04b',
            'info' => 'P3H9aH/USkbG6PbSJI/Kiy85M0dVOGU2TEJTUEM5L2t2cFZvUUFXMTBpWVVrMnViL1JvY2F1SmNrUHBEdG9CcTFMcCsyY1NaSWNEU0xHVmZQb2VjTnlET1c2SkFKQ2R0MnVVNWJ3PT0=',
            'device' => 'Mobile',
            'os' => 'Android',
            'ip' => '180.252.163.56',
            'dibuat' => '2025-04-30 23:12:44',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '8cd6fe56-45d5-4b87-8b0b-8c717b955d3a',
            'info' => 'f59EsMxzYdNgAzzYQ9blancraTc1WEJ1dVFCc1lNNnFybkRnRUtRbkhFREdQbTdocm9JbkZzenk2NU52aWpSVW80ZlU0aU5NeUN5T3cvUmxwck5OejdwT2IzaTllWGFpZUpCdmJRMXpjekYzR296THdqYUVTTmp0V3RFPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Windows',
            'ip' => '116.68.160.138',
            'dibuat' => '2025-04-28 09:12:54',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '8ed21a92-96eb-40e4-82b7-f02a5134f3ec',
            'info' => 'XpdodmUcL/Rd/peSGY5ke3AzZkFQUDMxeG5ocGp1c29wUEluM2tHSEtYeFZhMzZvWXptNlcyWS9YVzFkTnJsZ0JGdDBGMlN4R1h5M2pHb1FDcWtwUEw0Wm0yTnpBNGFUOHhudUo3VzE1L3VSUXY0WjVvYWI1Z2JMOE04PQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Windows',
            'ip' => '205.169.39.114',
            'dibuat' => '2025-04-28 20:52:36',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '8f67de6d-2607-43a6-999e-6a022a3279ee',
            'info' => 'EueLlkIsBedqxEJJ6tJb/3Q1Q2IwcURsU3cwTE5OU1N1WU4wcm9Ub0ZyM3JjV1FFZlViUzJvMjRkTnJwMld6TmY3Ui9SN2h4eFMycCtOTHFHMHFoNVFESCsyVVBTcjJPWWxDUjRBPT0=',
            'device' => 'Mobile',
            'os' => 'Android',
            'ip' => '175.45.186.196',
            'dibuat' => '2025-04-28 13:42:21',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '942228ed-d892-434b-98e4-20e59ad3606c',
            'info' => 'WvQgEO0ychR4yKFbjIwND0M4UVdxaWM5bVJ1MXRVS3JNcW50bEV6aE56U093c1Z2WjE1b05jU2JhVTc3YlBJbUlydDc5TzB3ajN3YkhWeUpKdWhWb3dSbEd4SWMxbWRnN29tNDluMHJnazZORTB4U2gxVFBNeDJEaUs0PQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '34.245.30.181',
            'dibuat' => '2025-05-11 07:47:25',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '94933b18-6303-47ee-8b75-63dc5e259358',
            'info' => 'oS+oBkvCYvIlC5Nv9diy3EY2N1FYNW50cmhDak5MTGJMSmZiYzhVOEpPTkRWRTI4dE9EOUR5TnRXRFJrbXNXdVRGRTlQbU9aKzBoUVVoMGt4M0ZWMHdubStoVEdLYUkyKzJ0WGlzZTdQbHMzdGxkdnRNcEVDc2doaEdVPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '23.27.145.111',
            'dibuat' => '2025-05-02 21:12:27',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '9a8a7b52-7927-4ff9-9675-c8bf54536580',
            'info' => 'Kgzjq3VAawYS1o3gky5zRnJab0gzaTI4dnVqamlzK3BFYVJwci9OMzFROVUrYjh3aE5HQTcxRHZvRkdmNkpGdzArUkQ4dnI2Q012TTk3NzBzU2VDVitDTDR5Q05DZW9kMW5ESlF5ZFk1WGhnRzY3SzBNTTJwYTQzM3I0PQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '35.175.121.240',
            'dibuat' => '2025-05-03 13:17:25',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '9affc157-1aa2-42bc-b7fa-42c86d2af101',
            'info' => 'dft3lFMIw1rd21TqQ6cQnEtST0d6V0tyZ0w4Sk5KUHR0bmRlekgrMm43N3ZzNWtCNFpUaHFrZ1pxWGt3Ukk2VUpDM0NhaWdUWW83TWN4RE5YK2tIRWF2cDRwWEIrbXdCbS9nM0x5NUZlSklBZzduWTIzOCtqWThITlVzPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '180.252.169.80',
            'dibuat' => '2025-05-03 00:09:39',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '9ed7a5f7-2340-45cf-83a9-d98c6e4f37da',
            'info' => 'EPZownlDEp9PnDh2w+xzulZKa0ZRWTJmTkhuekJkM3FPanNEU3ZHQjc2VE55Q2VxS3ZieXdlck0xb290Qjc5VkI1eEh3RGRLQXhTZXBpSTRtUUdPMStaL25ZdGlpOEFjS0ltTCt3dFpJdHZMa1Z5M3FOWnpORSt5Yk9zPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Windows',
            'ip' => '205.169.39.114',
            'dibuat' => '2025-04-28 20:53:32',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => '9f99fa26-2fba-475a-a067-eafa4445668d',
            'info' => 'ATOqTM+BIg+/IKx6rMoExEM2Z0lLRnNsY3R2MWduSStiUWlOWmVMY1hmUTVTeTFZTSsxQnpDMTcxdjVvUDlUNTJsbzFyNGJhYWNJWFFZUjBkVjUvMHpuV2dXeUNkSGdQMm41OTR3PT0=',
            'device' => 'Mobile',
            'os' => 'Android',
            'ip' => '116.68.160.138',
            'dibuat' => '2025-05-06 11:38:29',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'a737b1cb-706f-46f5-adca-f26657ac2eb2',
            'info' => 'NF+lQ7VUTuBj8/bE8lMhxlR6RWdWaVhEa3JacndDYVZZWkQxelY0b3dSRlBFQ2Z0Syt4UWF1UmZVd29ka3JUWGM5WXdCdm8yUUJjVUFJNGNEM2plK0tuSWFIeGcwc0Nxd0RybFVPazR3MlJScUQyc3pWcW9sb2hlN1U4PQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Windows',
            'ip' => '116.68.160.138',
            'dibuat' => '2025-04-29 10:40:28',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'af673de8-9277-42f3-a2ee-051bb64918a6',
            'info' => '4tZzShYzG2YMplS+PVYjCHFuMXh0TDlFZlFaaUFPQ0ZKaGpVZlUyejBlcmFDZWhRTWpFR1BlVWVIeWpHZldBYldQOTV0K1JkZjcwaS9ZaG14U0dpN25FdE43UDBxWFNTRUFLSHFJVWxiZFcrTEhxWGwrZ1RHVE1lT0xZPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Windows',
            'ip' => '116.68.160.138',
            'dibuat' => '2025-05-07 08:28:32',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'b2dd0cd5-e307-4f0c-9d5e-9b51bec656f3',
            'info' => 'Evo0snqwJUYgAvu/YBKZmUMvVUhHd0ExNkc4WWtQOUlnaVNrNXpvOGJmMkltZUw3bS9XY0pTd3lpeEU1d3M1T2YwWklGb1cvcG9GREZPYzc5QW9xRFljYmpzS2ZlQUljWm5uNTlRPT0=',
            'device' => 'Mobile',
            'os' => 'Android',
            'ip' => '180.252.163.154',
            'dibuat' => '2025-04-28 02:37:56',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'b8e10533-a5cc-46aa-b017-b87e1e8853b5',
            'info' => '4qzUuWJuQ89aSpbvCo3sNTh2TWEyODEyMHovVXk1UkNuTFdhcXluWmovWWlyVk5xTXpMM0crMXJNeldQSFd5bncvUkVuSVg2K2dMZmFmRCtOZXRSM1BHWkNxdWxoSVh6Zm9aa2RKbjJLTHpUdkpVQ2loSEwwc1NJL3RvPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '127.0.0.1',
            'dibuat' => '2025-04-27 13:13:41',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'b9685d7e-61c2-4a16-b835-1da6eaa4aa06',
            'info' => 'oCRqY8AwqYs4AbZ4Rag8L0xFY2VraWVMenM0NVVGNnE5U3VvTGFyRXJ0RTlqV256d2tLR1Q5QXpuMHNCbnErZmM0aUNiczhPZlEzMjFsYkxZbnIySVFURUV3WVNaejFueG14eHp3PT0=',
            'device' => 'Mobile',
            'os' => 'Android',
            'ip' => '180.252.163.56',
            'dibuat' => '2025-05-01 00:22:43',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'bcb4a890-54f9-4bb3-afb8-11110bd02d14',
            'info' => 'VH7N6xiMph+zHX3zQEt/rHVyU3RqeUIrYm1YRVBwditUNS95dHIrcUt1aVhjc2dpZGRUTmNwTVFmTm0za29uVDdNZlVpWkNDRVRsVUVCNWZrRGFjNldCcG9UQXZoOEJsMFN6NUVnPT0=',
            'device' => 'Mobile',
            'os' => 'Android',
            'ip' => '180.252.163.154',
            'dibuat' => '2025-04-28 02:37:25',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'bd6ee92a-8650-428d-924c-b4598bf6d38a',
            'info' => 'FnWSu25/ce7MUlJ/Bot1K2VYRDlzbU11RjJtTVB0WTRIQkppT1J3UUtMS0NRbWxrMDJnWWE2bXhyM2g0Z3hjZEtPVjcyTDFKSERpMEVIQkRLVU1nRTlhMjczVEtadWc4cU9Gb3FBPT0=',
            'device' => 'Mobile',
            'os' => 'iOS',
            'ip' => '141.148.153.213',
            'dibuat' => '2025-04-28 11:36:16',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'bff23580-1c0d-4f1c-b5ff-8e7682f157f8',
            'info' => 'fL6a85uWPDQA4RupN0ex+zM0RDdlaFJoR3oyUWFqSjByNjFNeGZ1eVg0c0h1SlJXRGFQSzZhMkF4Zi9VSHdNaHZNWWlwTGFGOUxveUVJb3paRGZ3VERvTmlXWlR4eDVncnRvM3VldEk0N3doR1Y4VFZFcXY4eEc0VEcwPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '180.252.163.62',
            'dibuat' => '2025-04-29 19:03:36',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'c0d73c6e-9903-4ece-bbe3-b262ce5c065e',
            'info' => 'yx7heagn7XxSJphH6tBtJnRyMWtOVDNibTRMY0paNnlTSmVKQnJuSXlVMThXOExGNjZScmp3N3lRUlFCZXgwbllYNTdpd01vbU12ckxnL2pETUdzSEV1d0RabCtYdERsd2ptMExzb2dEMWpFeEo0T21OdlllNTUzcjFNPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '116.68.160.138',
            'dibuat' => '2025-04-28 11:01:03',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'c27a3fb6-f497-4d22-92b1-2cc2a0d3feba',
            'info' => 'ZQn0PM544jZZ5CuhNONxk1dZV3lKMmJXcUc4cW1OVjRxajJpWEg5VDJrdjBGK3ZrZmlzNW44NjMwRFk3bStlVUNsOVJBSHlmWW8wZ2ZiVHpnSXdLMjdnSUxtZU0yLzJzYXRReFFmR3grQWl2MjZmZjBHdmtUZXlDMjZzPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Windows',
            'ip' => '34.57.57.206',
            'dibuat' => '2025-04-28 03:25:26',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'c82de937-3de3-4e9e-b873-a9496666aea9',
            'info' => 'LQLqaH7Msa4+/6WPMOP0A3hnRHVMWkhMcVcxTzFXSVZwMExvdVpnRkQwVEtYTDBlVnJvZWZpV0Noc1BwQUVYRllWOXZJcy9lUmR2Yk5YMHBBZXlaS3BoeG5vcUhISko5R2xsdDdDNXlJeEhzQUFMTWVkZ2JFelUwVTdjPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '116.68.160.138',
            'dibuat' => '2025-04-28 10:53:36',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'c8721ebf-7632-4f07-a6cd-b2a43c9f38f9',
            'info' => 'NCbL06yhdYU72BlSOL0+51d5ZHRpc0o4a3JmQmo3aGpaOGZTclBrSnV3Y1YxdTRLV0lyTDl5NGNhMS9aVVF3TVRkZW5GZ3lpcVJ4K0dXL0w4bnI3WHN6dmJYV0pWenJ1YXp3VHZTTy81VU9ENysxNWFaSGxlU0g4aEFNPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Windows',
            'ip' => '116.68.160.138',
            'dibuat' => '2025-04-28 10:57:52',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'ca3274f3-ca3e-4069-b5b3-3afef5e1a881',
            'info' => 'PwU8eZbpzmcUpxpZ+TOlFzF6NENZMlliZ0ZXVDJEbFRyV0ZlWHF6QTZsQnNSL0pSSG5sL3lFekxqbmFJYUNuSE14dzd6UGZPTnBkVlNnV3o4YXJuay9PYzVJTFkvSmdaNEdmNWpuZjM0Yks5LzdYOFBLbEZZaXdwUGJJPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '149.57.180.146',
            'dibuat' => '2025-04-28 20:04:33',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'ca7e4947-7dda-4a77-9c1e-f6566c7c6021',
            'info' => 'ERyjJ6n0NzUNOypySKI/IDExa3RoUEZOeVYyc0d0YUVuczJoUkNnWDZYK0ZzTlFWWlZ3eWQzUmhINTczUWJyS0tWaEI2QlU5bGpCdVg5NXlBTmUvemFQYXhVRmdINDB3L0dtY1RoNHZJTFNGUzEzWGFzdDZSRnF1RzlFPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Windows',
            'ip' => '3.21.129.107',
            'dibuat' => '2025-04-28 16:12:49',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'd3744dfc-2997-491b-8d25-078532e34f69',
            'info' => 'RbdrdDrh0FlZD1pUrlx2czdzUjdkKzkyTGZSaHYvTnBKSVExWlhsb2RnSzBoN1FBQnBxSWQ1Vi9Lb2lSWjdSWFhCV1I5OVMxcGVjZHRaOEdPL3lUR2VFajk4TFJtNDFFTUhiVnNNQ1F0Mlg3am5VNUJseW14eTkrMU8wPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '180.252.163.76',
            'dibuat' => '2025-05-03 19:45:24',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'da0e4f26-44ed-4216-825c-3db8991cad08',
            'info' => 'eqzD7N/w6LcdGx8w5g8AUktjcTJPejhnM25qRVJPSkNpMzdNb21Ra2E3WEtRdTRTR05SZVgwZ0pYbk0wQjBGckRoUTBneW9FTWRaZGFpd3lPQ25lSm1SWjI4VHVXSmVqaFlYcVBUSUlEL3dSTDVPZk50QWVUTERHV2tFPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '198.235.24.81',
            'dibuat' => '2025-05-07 08:28:44',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'dd9df70f-e451-4c76-b21c-48fae4a45142',
            'info' => 'jgtNYQjxdTzvtrcu0L/W2EZLUDhPcHBZVkRWaHFqZ2dSNUxUV3QvTTg5RWFDSzg0UDVEYnI1RWpESHNxMWhaRmo5U1l0Wkk4VVFoQTNjVDk1dUFldUZHNit1UDdYc0djTHZaT05VaUZKTVJ3a3NsY0hQSGw1d3JlenowPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '134.122.91.51',
            'dibuat' => '2025-05-09 09:22:17',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'df374557-0a51-4e56-aa37-30bd3512ad59',
            'info' => '7XrFs5AiQI9f40J9HAd1qmxwbHdhQXVjYkZ1QitwbE03cTllMjNuMU56MGc1UWNVR0x4Z2lKbWQ3ZUJHWVhVZXJiSlZ0RUliNEtnWjRBZVQxc2pjekx1bXhGc0hZYjU2Y2VBWElRPT0=',
            'device' => 'Mobile',
            'os' => 'iOS',
            'ip' => '141.148.153.213',
            'dibuat' => '2025-04-28 11:35:03',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'e24c1661-e70d-4589-8a28-9e7273874fab',
            'info' => 'HQTgGZ6P+/uM9Ht3cRJvsEdzSEFTaVhJVS9WT3NCQ0hEZjRCNmZucVYyWkpFWEdEM1M1L0xZcnJGcVIrOVVhcW0wWE5FRHBLVnZISW9SL3lacG1nai9La25lR3J4cVhwUGpyWG5QWndIWTlxVkpLUjc3elI1RGdYbGlzPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '127.0.0.1',
            'dibuat' => '2025-04-27 13:14:10',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'e44f8274-0313-42df-9beb-0bead13706b9',
            'info' => 'LE5bK00xhqmahAzNQaAs8DZVc0g1VzJ6YkZOSHBNZ3NBTlhWNHRYNVZ2dGxINklUNldlWXc3T3lacjhyQTdVdGRMaW9NN25pUC9DdGYwRjJFNjBWR3FMOHdoZzAwRkdTV2NYbXloSk43enNJRkw3dGVHaHVIcU50ME9vPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Windows',
            'ip' => '116.68.160.138',
            'dibuat' => '2025-05-08 08:43:11',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'e47ec9bb-d6f5-4461-8c30-28f0c6fce596',
            'info' => 'XP5oHv4cqDxsqVxY3U4HlnFGeHh1UC9QNW8vM1BDam9VYzZjYU44L0pCcnJRSUpxbC9YWjYvSG54MTRGV2hzT2xMV2NoWExCSHg3Vk1mSTZ4TGhYajBMZkZPYWtEZHQ1OEpzempRPT0=',
            'device' => 'Mobile',
            'os' => 'iOS',
            'ip' => '141.148.153.213',
            'dibuat' => '2025-04-29 03:39:34',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'e5c10054-7691-474a-ac81-cfccfb549c66',
            'info' => 'SCPjH6/00gOBI8yUOPk/zDgyWHZsZmlSemdZenVSNVFCQlM3V0R5MDdZUGFxdDJiMUtYMGQyMGdkeS96NXRtaVpCTDhaeGs2Q292K2NHSnU5RnVDMlB2bVh3RHQ0N0VUTWVoNFZsOTJ1L1V1elNrQ053ZERJaU04dHc4PQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '180.252.163.56',
            'dibuat' => '2025-05-01 05:10:14',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'e6185707-893f-4816-a34b-adf29974d689',
            'info' => 'pIYkV5ewMlJ/vzXHex1sv1o2SGt2ZC8wbEFHOG1kanloWkdIQkVrNHI0c0hsZzBITVJFd1NUS0pzbUxtTVF5YWwyV0RGUHhOeHZJRDJrTGIvSnpEeWdmVkhMNEV5S0k4dE1sZHVSc1c3S1hqMUhMM0NOOGJ2WTVYR2FvPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '149.57.180.122',
            'dibuat' => '2025-05-02 20:42:20',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'e642e0f2-fc06-480b-982a-796f2f8d3163',
            'info' => 'Tm8t6YlvwxxKsho5Jkq49U5hSWFxU1VBTUxpZ053dTZFR0ZadlNrdnZCQ28zVmdBRFpNa2lUYS92SWJkNFVSeW5Oc2lXY2Q0MW03V24zamwrbU10N2JjMDdqZ29KK0JPZ09idW5BPT0=',
            'device' => 'Mobile',
            'os' => 'Android',
            'ip' => '64.233.173.230',
            'dibuat' => '2025-05-06 11:38:36',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'e8ef3c75-8d2e-4c04-857c-fdbd7bffb2de',
            'info' => 'wOP32FrpDQHAryNW9PIApVQ0bmR6RHVsekdSZU5rSTYrek5CTFhRNS9DV0FtSGlJaFM1Ty9BMVpadFhkaHYrNFJrYTlYZGlNZ0I2OVpnZURQZU5pVC9IUDNlQXo2a0pXWlA5Qmg2UWZ5c2R6MndGd0Y5aEI0Q1VLSkd5dG9lQTRvRDNpNlhYbE1rZFdSTERq',
            'device' => 'Mobile',
            'os' => 'Android',
            'ip' => '2001:448a:1021:1416:483:3796:2b7d:6504 ',
            'dibuat' => '2025-04-28 09:49:45',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'e8f14143-6d8c-4893-8642-2f65d4eedc19',
            'info' => '5quB6MF7JQjpfhGiromaUkZNWThvSzk4YXRPWmFSMDg5YnMxYU1pSVhZRXQvRmxTQTNOMkJhR000MUp1WHZ3bmVWRktvQldIV2F6N3lXWUVESCtEeTlKbEdDc0NTVGNXaGFvU3FOeTltWlRwSDRSKzdxd0Y5a0UxYTZvPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '116.68.160.138',
            'dibuat' => '2025-05-06 11:38:15',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'ed736045-bef8-4407-8dbe-e27d9f692caa',
            'info' => 'Uklnz1Jm/3Fni4GaDuDQMVRiSkdzMlRESU1aSVdyd2p5WG9RQnZacy9KNDRPM2xRbFhmbFpPUVRkRmhLcC9PY1doalM0cXB5Zkp3WWJxemFYaWMzNWExOVVjYmduaWg0TnRnbFJER08zYm42MDNZVW03NHBZQkNtRlRJPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Windows',
            'ip' => '34.123.40.89',
            'dibuat' => '2025-04-28 03:25:28',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'ed80ade4-ab24-49ab-814f-6aebce1a3374',
            'info' => 'sYHR76VaMtUztpUUXvgNBndYSkpxRlFDOFlOZnFoOW8wa29TMFJKaUZsOE05MUJtUCtUdFI3WkRhZ0s4YXdOZUQ2RlJNL2U0NXVjQlRSQ0xIYWZ5QmMxWU80RWlZZnMyRFIyRTEwUmlCNXVnQlNCbU5mdjFsSTdTUFJjPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '165.232.177.152',
            'dibuat' => '2025-05-01 09:00:14',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'f16194b1-7073-40f0-84e9-98b48da6ae7b',
            'info' => 'DFnVHkZXwwVGojy/1+t1wUhPazlKRlF1TEM4bTgyMFR5Q0c3WExVUkt6VHRGMDRvb1VCR01yTzBCQzdiWE1mQ2V2aXp6RTF1Rk52Skp6TXRCbFhrKzlXSmRQREpOVVdpOTBDSGhZRTRmN3VGTW9lVzVjSHNvd2pIb2FZPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Windows',
            'ip' => '51.38.135.19',
            'dibuat' => '2025-04-30 23:30:45',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'f8707301-d9dd-44d8-8d87-cfd3f798978c',
            'info' => '18wpuC+6BOP6CNlCtAaDuGJMemZCOVFCTzREWHpXUDVmZGJtUXVDYTRVTlBqTlA3dFNYSEZDODdJSVRNTUg4MlNQUG5LTHQ0NTFTZGZsS2xCYVpGTEd2MS81aE9XeTNHT2tuZWVBPT0=',
            'device' => 'Mobile',
            'os' => 'iOS',
            'ip' => '141.148.153.213',
            'dibuat' => '2025-04-29 03:39:26',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'f9d96ef6-8f70-464c-8595-69e2ebb50a4f',
            'info' => 'ym1d+Gq7FFArzPEq0fvs8UZoU1puTVBDRXpnQXArcHRKeTVuUHh0alFQOGh0eUViREpSV01obFJ2dklHTWpkbFJScmh1YURzaUpHdmxsTkFPRVRKajUveHZETytvVUZkbzBUNVFRPT0=',
            'device' => 'Mobile',
            'os' => 'Android',
            'ip' => '180.252.163.154',
            'dibuat' => '2025-04-28 09:54:09',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'fb15969f-fab6-43c0-aa21-4851eabafc47',
            'info' => 'TYMcptEYLtd3NEnztgl2PFZiUDV5TDN4Ri8xeE4wVWJoUXA5L2FDcWgrKzF4TTVPNURwbFp5cVdSZ2xBQm9FaHRaL3FKdmF2bW5LLzJ2OU9KYzVSdGNTWTJxUm1Mb1JKSTkreUd0ZTVoY0RTWDJFUS9sTkZ3V2ZxTDVvPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '104.236.82.108',
            'dibuat' => '2025-04-30 14:20:32',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'fbbd2f2a-cde0-4d16-bc7a-e49ab3477040',
            'info' => 'Nii/H5JxiI7t+fgE+swLLnowa21EMVl6OHFRa0pKSjJ2L1pZRkRvU3pNYXF2NXliY1duYnFoNnM2TGRFdmQzOFlXbkVmWEd5OFpOaGYxUXR6NEh1aW4rVGlhQlpHV3pwMUtIYnNtN1ZYZXhWSkMzdUZrejFJQ2xpWmJ3PQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '143.110.158.237',
            'dibuat' => '2025-04-28 14:15:31',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'fc33e33e-36ae-434a-8b82-49720f3ede17',
            'info' => '/KAiYb0CdYvP4BrTdcm2GE5Va0ZLQzFaa2Y0M0I1aGF2Y2hIWDV1VmpGUnd6WTBwRUtPNXVSc2RZWGVlYThlVlAzcGMvaThYMlF5K1AxcThGT3lWaExHSUdkbDRiTmNjY0hhcTdndUNRWndySnoxaHJwSmVwamoycEl3PQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '8.219.6.211',
            'dibuat' => '2025-04-28 04:41:56',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'fd415cc2-686e-441e-8a4c-4f58d0e85ad0',
            'info' => 'v8Vs88Bm31xEFSv5DQi6JUJvZjUzSFF0bjkzR1QyYmc4SktaQ2hTYXoxSENjWVJHUWg3V1A4ZmhzT0p2VTVnZXRWZ01CTGpHbzJjNlQyVXJVOWhEQmxGK3U5RTVhOVppVDRpNkVBPT0=',
            'device' => 'Mobile',
            'os' => 'Android',
            'ip' => '2404:c0:2020::f4:588d ',
            'dibuat' => '2025-04-28 13:42:09',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'fd8cb6ff-ab18-441b-ab09-95548989db4b',
            'info' => '7MgI1y9IZDbn26I+aQ2pbTFRUzczRGlUeUc3NVRsYmNVaHRxRGZtTzZ6Wkpoc0xMY1RtRDNlc2RHalBPSU5DdmQzZHVhR1ZFSHllcXVGdnI2L0VJRG90N3phRHl5VUwxRzhBYUFuSjRKaGFPTWs3OEFVeDIrN1hjWVRvPQ==',
            'device' => 'Komputer/ Laptop',
            'os' => 'Chrome Os',
            'ip' => '5.135.58.196',
            'dibuat' => '2025-04-30 03:01:05',
        ]);
        
        DB::terhubung()->input('pengunjung', [
            'id' => 'ffcc3fb6-6c94-4eb6-8f5f-6f4e15e746be',
            'info' => 'CeHMp0vjS1pCxYjk/Z3kkUNja1RKT3kvcHRuR28wNzQ3RlFNeG5tbnlZTzlOc3NzcHdybGFBZnZnNFlZSlRueVZNMkkvNUFnQS9ocDhDdm9OTVl3SFZwU3pTV3MzanoxcW1LZGlRPT0=',
            'device' => 'Mobile',
            'os' => 'Android',
            'ip' => '180.252.163.56',
            'dibuat' => '2025-05-01 00:24:27',
        ]);
    }
}
$create = new pengunjung();
$create->buattabel();
