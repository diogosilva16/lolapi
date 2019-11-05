---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Champion Skills management


<!-- START_d59c689c20c9c3ca67836008e1702d4d -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/championSkill" 
```

```javascript
const url = new URL("http://localhost/api/championSkill");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/championSkill`


<!-- END_d59c689c20c9c3ca67836008e1702d4d -->

<!-- START_18515feb2f30d7348b51a65eaace7b85 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/championSkill/create" 
```

```javascript
const url = new URL("http://localhost/api/championSkill/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/championSkill/create`


<!-- END_18515feb2f30d7348b51a65eaace7b85 -->

<!-- START_d367bede4992567617eb7ccd98aa78fa -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/championSkill" 
```

```javascript
const url = new URL("http://localhost/api/championSkill");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/championSkill`


<!-- END_d367bede4992567617eb7ccd98aa78fa -->

<!-- START_149309ea10a73c9a833bb5da5f78fab7 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/championSkill/1" 
```

```javascript
const url = new URL("http://localhost/api/championSkill/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "small_name": "AatroxQ",
    "name": "Dark Flight",
    "description": "Aatrox takes flight and slams down at a targeted location, dealing damage and knocking up enemies at the center of impact.",
    "champ_id": 1,
    "created_at": null,
    "updated_at": null,
    "deleted_at": null,
    "image": ""
}
```

### HTTP Request
`GET api/championSkill/{championSkill}`


<!-- END_149309ea10a73c9a833bb5da5f78fab7 -->

<!-- START_ae575c6bd7ff5c56a77930a0e2ff9377 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/championSkill/1/edit" 
```

```javascript
const url = new URL("http://localhost/api/championSkill/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/championSkill/{championSkill}/edit`


<!-- END_ae575c6bd7ff5c56a77930a0e2ff9377 -->

<!-- START_9891e07714209a0de0ce63158580eeac -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/championSkill/1" 
```

```javascript
const url = new URL("http://localhost/api/championSkill/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/championSkill/{championSkill}`

`PATCH api/championSkill/{championSkill}`


<!-- END_9891e07714209a0de0ce63158580eeac -->

<!-- START_57be34943ea7b4722a94a75e1a795b38 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/championSkill/1" 
```

```javascript
const url = new URL("http://localhost/api/championSkill/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/championSkill/{championSkill}`


<!-- END_57be34943ea7b4722a94a75e1a795b38 -->

#Champion Skins management


<!-- START_fde0c20f6b91d545716d31b0063148c6 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/championSkin" 
```

```javascript
const url = new URL("http://localhost/api/championSkin");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/championSkin`


<!-- END_fde0c20f6b91d545716d31b0063148c6 -->

<!-- START_2ec2e77fcb7b2c22b6e32aa68325cef8 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/championSkin/create" 
```

```javascript
const url = new URL("http://localhost/api/championSkin/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/championSkin/create`


<!-- END_2ec2e77fcb7b2c22b6e32aa68325cef8 -->

<!-- START_48d90230770af6f0e908d21b368c070d -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/championSkin" 
```

```javascript
const url = new URL("http://localhost/api/championSkin");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/championSkin`


<!-- END_48d90230770af6f0e908d21b368c070d -->

<!-- START_de0c0ff8087a75d712e56909593dc592 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/championSkin/1" 
```

```javascript
const url = new URL("http://localhost/api/championSkin/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/championSkin/{championSkin}`


<!-- END_de0c0ff8087a75d712e56909593dc592 -->

<!-- START_66e54e7be86e74a606f8fedc7adf54ed -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/championSkin/1/edit" 
```

```javascript
const url = new URL("http://localhost/api/championSkin/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/championSkin/{championSkin}/edit`


<!-- END_66e54e7be86e74a606f8fedc7adf54ed -->

<!-- START_fa659191331e6b53b7b661e6fc428798 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/championSkin/1" 
```

```javascript
const url = new URL("http://localhost/api/championSkin/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/championSkin/{championSkin}`

`PATCH api/championSkin/{championSkin}`


<!-- END_fa659191331e6b53b7b661e6fc428798 -->

<!-- START_83a724ff40955bfc71abffc7eb8197ac -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/championSkin/1" 
```

```javascript
const url = new URL("http://localhost/api/championSkin/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/championSkin/{championSkin}`


<!-- END_83a724ff40955bfc71abffc7eb8197ac -->

#Champion management


<!-- START_8287b53731a7e2de025ffda4593f75da -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/champion" 
```

```javascript
const url = new URL("http://localhost/api/champion");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/champion`


<!-- END_8287b53731a7e2de025ffda4593f75da -->

<!-- START_33980d59662416a10e9a0fb69a7fce80 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/champion/create" 
```

```javascript
const url = new URL("http://localhost/api/champion/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/champion/create`


<!-- END_33980d59662416a10e9a0fb69a7fce80 -->

<!-- START_eb6c9c2dffb31ca44295ceabe2fe6ccc -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/champion" 
```

```javascript
const url = new URL("http://localhost/api/champion");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/champion`


<!-- END_eb6c9c2dffb31ca44295ceabe2fe6ccc -->

<!-- START_f52374dd94e3ace8fda487ce2cb0b34c -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/champion/1" 
```

```javascript
const url = new URL("http://localhost/api/champion/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "name": "Aatrox",
    "title": "the Darkin Blade",
    "description": "Once honored defenders of Shurima against the Void, Aatrox and his brethren would eventually become an even greater threat to Runeterra, and were defeated only by cunning mortal sorcery.",
    "created_at": null,
    "updated_at": "2019-11-05 18:15:05",
    "deleted_at": null,
    "image": "champImage\/N5MTPubNTfxxQlbWjIh0mihcjbmdNrXYIIXGY0Rc.png"
}
```

### HTTP Request
`GET api/champion/{champion}`


<!-- END_f52374dd94e3ace8fda487ce2cb0b34c -->

<!-- START_11db9e3254fc7f2a5ea7029d3d7ae765 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/champion/1/edit" 
```

```javascript
const url = new URL("http://localhost/api/champion/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/champion/{champion}/edit`


<!-- END_11db9e3254fc7f2a5ea7029d3d7ae765 -->

<!-- START_c43ccc58724871827265582aa9a55641 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/champion/1" 
```

```javascript
const url = new URL("http://localhost/api/champion/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/champion/{champion}`

`PATCH api/champion/{champion}`


<!-- END_c43ccc58724871827265582aa9a55641 -->

<!-- START_f9a2754f480c4e47f74880789347ecc4 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/champion/1" 
```

```javascript
const url = new URL("http://localhost/api/champion/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/champion/{champion}`


<!-- END_f9a2754f480c4e47f74880789347ecc4 -->


