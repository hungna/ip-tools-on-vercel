# My IP Tools

1 con tools nhỏ dùng lấy thông tin IP

## View IPs with map

- https://ip.nguyenanhung.com/view
- https://ip.nguyenanhung.com/view?ip=1.1.1.1

## Example Usage

```shell
curl --location 'https://ip.nguyenanhung.com/?ip=1.1.1.1'
```

```php
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://ip.nguyenanhung.com/?ip=1.1.1.1',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET'
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

```

## Contact

If any question & request, please contact following information

| Name        | Email                | GitHub        | Facebook      |
|-------------|----------------------|---------------|---------------|
| Hung Nguyen | dev@nguyenanhung.com | @nguyenanhung | @nguyenanhung |

From Hanoi with Love <3

