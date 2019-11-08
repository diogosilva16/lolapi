---
title: LoL Champions API Docs

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- TDI @ MCMM 2019
- Diogo Silva - 85911
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


> Example response (200):

```json
[
    {
        "id": 1,
        "small_name": "AatroxQ",
        "name": "Dark Flight",
        "description": "Aatrox takes flight and slams down at a targeted location, dealing damage and knocking up enemies at the center of impact.",
        "champ_id": 1,
        "created_at": null,
        "updated_at": "2019-11-08 00:40:28",
        "deleted_at": null,
        "image": "champSkills\/lV4jVsts0MB3AR7ubkQ8Cz0VAaLGmUBH6Oo7lfAw.png"
    },
    {
        "id": 2,
        "small_name": "AatroxW",
        "name": "Blood Thirst \/ Blood Price",
        "description": "While toggled on Aatrox deals bonus damage every third subsequent attack at the expense of his own Health. While toggled off Aatrox restores Health every third subsequent attack.",
        "champ_id": 1,
        "created_at": null,
        "updated_at": "2019-11-06 22:58:25",
        "deleted_at": null,
        "image": "champSkills\/eWgbCd6sMo8tPiZgfRdJnb7d0KPLfPQu4T5Yc6JM.png"
    },
    {
        "id": 3,
        "small_name": "AatroxE",
        "name": "Blades of Torment",
        "description": "Aatrox unleashes the power of his blade, dealing damage to enemies hit and slowing them.",
        "champ_id": 1,
        "created_at": null,
        "updated_at": "2019-11-06 22:58:45",
        "deleted_at": null,
        "image": "champSkills\/5RuFnyQAmlDh25XiHoskYIJkOYrC7T9kmigXVYpN.png"
    },
    {
        "id": 4,
        "small_name": "AatroxR",
        "name": "Massacre",
        "description": "Aatrox draws in the blood of his foes, damaging all nearby enemy champions around him and gaining increased Attack Speed and bonus Attack Range for a short duration.",
        "champ_id": 1,
        "created_at": null,
        "updated_at": "2019-11-06 22:59:02",
        "deleted_at": null,
        "image": "champSkills\/7b1wCD5uBOUbBFaBEKHB2euC2h6pZKaOVrIK0RmY.png"
    },
    {
        "id": 5,
        "small_name": "AhriQ",
        "name": "Orb of Deception",
        "description": "hri sends out and pulls back her orb, dealing magic damage on the way out and true damage on the way back. Ahri gains movement speed that decays while her orb is traveling.",
        "champ_id": 2,
        "created_at": null,
        "updated_at": "2019-11-06 23:49:42",
        "deleted_at": null,
        "image": "champSkills\/r1aAkHeXLg3Q7jcZrsggP8BQTfn8hg7DWTcq4558.png"
    },
    {
        "id": 6,
        "small_name": "AhriW",
        "name": "Fox-Fire",
        "description": "Ahri releases three fox-fires, that lock onto and attack nearby enemies.",
        "champ_id": 2,
        "created_at": null,
        "updated_at": "2019-11-06 23:49:50",
        "deleted_at": null,
        "image": "champSkills\/y0ohggyh8mT0eFWaFYF9CySiGP0AY0CBY5fwGc2e.png"
    },
    {
        "id": 7,
        "small_name": "AhriE",
        "name": "Charm",
        "description": "Ahri blows a kiss that damages and charms an enemy it encounters, causing them to walk harmlessly towards her.",
        "champ_id": 2,
        "created_at": null,
        "updated_at": "2019-11-06 23:49:56",
        "deleted_at": null,
        "image": "champSkills\/5qehj3IeF0hrQ5MRUhjWXqbTQG2Lflae1ytKfSss.png"
    },
    {
        "id": 8,
        "small_name": "AhriR",
        "name": "Spirit Rush",
        "description": "Ahri dashes forward and fires essence bolts, damaging 3 nearby enemies (prioritizes Champions). Spirit Rush can be cast up to three times before going on cooldown.",
        "champ_id": 2,
        "created_at": null,
        "updated_at": "2019-11-06 23:50:03",
        "deleted_at": null,
        "image": "champSkills\/puzfVvKeRR98YyOvrPucjIBoAQFYIMuag5ORHbvY.png"
    },
    {
        "id": 11,
        "small_name": "AkaliW",
        "name": "Twilight Shroud",
        "description": "Akali teleports to a nearby location, leaving a cover of smoke at her previous location. While inside the shroud, Akali becomes Invisible and gains Movement Speed. Attacking or using abilities will briefly reveal her.",
        "champ_id": 3,
        "created_at": "2019-10-24 21:48:39",
        "updated_at": "2019-10-24 21:48:39",
        "deleted_at": null,
        "image": "champSkills\/2cycg6fjXsYNuRs5rXCHseZcZ9UGcmbHNW7Sow7K.png"
    },
    {
        "id": 12,
        "small_name": "AkaliE",
        "name": "Shuriken Flip",
        "description": "lip backward and fire a shuriken forward, dealing physical damage. The first enemy or smoke cloud hit is marked. Re-cast to dash to the marked target, dealing additional damage.",
        "champ_id": 3,
        "created_at": "2019-10-24 21:51:53",
        "updated_at": "2019-10-24 21:51:53",
        "deleted_at": null,
        "image": "champSkills\/D7XFTnMGwogFks3U8HAerHkozgLjyWR01g2hXYef.png"
    },
    {
        "id": 13,
        "small_name": "AkaliR",
        "name": "Perfect Execution",
        "description": "Akali leaps in a direction, damaging enemies she strikes. Re-cast: Akali dashes in a direction, executing all enemies she strikes.",
        "champ_id": 3,
        "created_at": "2019-10-24 21:52:53",
        "updated_at": "2019-10-24 21:52:53",
        "deleted_at": null,
        "image": "champSkills\/1aKW7A7mWfz4Ah9NszYF9x3edfps7ojHJoeGIauE.png"
    },
    {
        "id": 14,
        "small_name": "AlistarQ",
        "name": "Pulverize",
        "description": "Alistar smashes the ground, dealing damage to nearby enemies and tossing them into the air.",
        "champ_id": 4,
        "created_at": "2019-11-05 21:37:38",
        "updated_at": "2019-11-05 21:37:38",
        "deleted_at": null,
        "image": "champSkills\/hMYmWjc3SPf6t0l3LMmHYhCXc1gFiZR5B2gTGKCl.png"
    },
    {
        "id": 15,
        "small_name": "AkaliQ",
        "name": "Five Point Strike",
        "description": "Akali throws out five kunai, dealing damage based on her bonus Attack Damage and Ability Power and slowing.",
        "champ_id": 3,
        "created_at": "2019-11-05 21:56:11",
        "updated_at": "2019-11-05 21:56:11",
        "deleted_at": null,
        "image": "champSkills\/yEk0L3a5TY1f8uKT8ZfQQjAQiR5u8Z1X3yuFJ7dr.png"
    }
]
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


> Example response:

```json
null
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


> Example response (200):

```json
[
    {
        "id": 1,
        "name": "Default",
        "image": "champSkin\/cpyNfeTd7uhdUS9HfETIJ4kmqcTk2x5y6is0iFqD.jpeg",
        "champ_id": 1,
        "created_at": "2019-11-07 00:37:16",
        "updated_at": "2019-11-08 00:54:17",
        "deleted_at": null
    },
    {
        "id": 2,
        "name": "Justicar Aatrox",
        "image": "champSkin\/YOZvd7rm3lpa4yzepnRJOKuaqRCCR7vX42CjsZpz.jpeg",
        "champ_id": 1,
        "created_at": "2019-11-07 00:37:24",
        "updated_at": "2019-11-07 00:37:24",
        "deleted_at": null
    },
    {
        "id": 3,
        "name": "Default",
        "image": "champSkin\/utxwKYbdsgbYqi6KDlnEHaOlIlSQ1WT3hIriVia9.jpeg",
        "champ_id": 2,
        "created_at": "2019-11-07 00:37:35",
        "updated_at": "2019-11-07 00:37:35",
        "deleted_at": null
    },
    {
        "id": 4,
        "name": "Dynasty Ahri",
        "image": "champSkin\/Yn7LG6p4EIOYwVbmTnvGJ5DVjYI5xmPySi9bnDqF.jpeg",
        "champ_id": 2,
        "created_at": "2019-11-07 00:37:48",
        "updated_at": "2019-11-07 00:37:48",
        "deleted_at": null
    },
    {
        "id": 5,
        "name": "Mecha Aatrox",
        "image": "champSkin\/eFqVu7gRAItriz7MN9lSfkDMgkfJCKtO0CCcKbSe.jpeg",
        "champ_id": 1,
        "created_at": "2019-11-08 00:52:36",
        "updated_at": "2019-11-08 00:52:36",
        "deleted_at": null
    }
]
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


> Example response (200):

```json
{
    "id": 1,
    "name": "Default",
    "image": "champSkin\/cpyNfeTd7uhdUS9HfETIJ4kmqcTk2x5y6is0iFqD.jpeg",
    "champ_id": 1,
    "created_at": "2019-11-07 00:37:16",
    "updated_at": "2019-11-08 00:54:17",
    "deleted_at": null
}
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


> Example response (200):

```json
[
    {
        "id": 1,
        "name": "Aatrox",
        "title": "the Darkin Blade",
        "description": "Once honored defenders of Shurima against the Void, Aatrox and his brethren would eventually become an even greater threat to Runeterra, and were defeated only by cunning mortal sorcery.",
        "created_at": null,
        "updated_at": "2019-11-08 00:41:36",
        "deleted_at": null,
        "image": "champImage\/N5MTPubNTfxxQlbWjIh0mihcjbmdNrXYIIXGY0Rc.png",
        "role_id": null,
        "champion_skills": [
            {
                "id": 1,
                "small_name": "AatroxQ",
                "name": "Dark Flight",
                "description": "Aatrox takes flight and slams down at a targeted location, dealing damage and knocking up enemies at the center of impact.",
                "champ_id": 1,
                "created_at": null,
                "updated_at": "2019-11-08 00:40:28",
                "deleted_at": null,
                "image": "champSkills\/lV4jVsts0MB3AR7ubkQ8Cz0VAaLGmUBH6Oo7lfAw.png"
            },
            {
                "id": 2,
                "small_name": "AatroxW",
                "name": "Blood Thirst \/ Blood Price",
                "description": "While toggled on Aatrox deals bonus damage every third subsequent attack at the expense of his own Health. While toggled off Aatrox restores Health every third subsequent attack.",
                "champ_id": 1,
                "created_at": null,
                "updated_at": "2019-11-06 22:58:25",
                "deleted_at": null,
                "image": "champSkills\/eWgbCd6sMo8tPiZgfRdJnb7d0KPLfPQu4T5Yc6JM.png"
            },
            {
                "id": 3,
                "small_name": "AatroxE",
                "name": "Blades of Torment",
                "description": "Aatrox unleashes the power of his blade, dealing damage to enemies hit and slowing them.",
                "champ_id": 1,
                "created_at": null,
                "updated_at": "2019-11-06 22:58:45",
                "deleted_at": null,
                "image": "champSkills\/5RuFnyQAmlDh25XiHoskYIJkOYrC7T9kmigXVYpN.png"
            },
            {
                "id": 4,
                "small_name": "AatroxR",
                "name": "Massacre",
                "description": "Aatrox draws in the blood of his foes, damaging all nearby enemy champions around him and gaining increased Attack Speed and bonus Attack Range for a short duration.",
                "champ_id": 1,
                "created_at": null,
                "updated_at": "2019-11-06 22:59:02",
                "deleted_at": null,
                "image": "champSkills\/7b1wCD5uBOUbBFaBEKHB2euC2h6pZKaOVrIK0RmY.png"
            }
        ],
        "champion_skins": [
            {
                "id": 1,
                "name": "Default",
                "image": "champSkin\/cpyNfeTd7uhdUS9HfETIJ4kmqcTk2x5y6is0iFqD.jpeg",
                "champ_id": 1,
                "created_at": "2019-11-07 00:37:16",
                "updated_at": "2019-11-08 00:54:17",
                "deleted_at": null
            },
            {
                "id": 2,
                "name": "Justicar Aatrox",
                "image": "champSkin\/YOZvd7rm3lpa4yzepnRJOKuaqRCCR7vX42CjsZpz.jpeg",
                "champ_id": 1,
                "created_at": "2019-11-07 00:37:24",
                "updated_at": "2019-11-07 00:37:24",
                "deleted_at": null
            },
            {
                "id": 5,
                "name": "Mecha Aatrox",
                "image": "champSkin\/eFqVu7gRAItriz7MN9lSfkDMgkfJCKtO0CCcKbSe.jpeg",
                "champ_id": 1,
                "created_at": "2019-11-08 00:52:36",
                "updated_at": "2019-11-08 00:52:36",
                "deleted_at": null
            }
        ]
    },
    {
        "id": 2,
        "name": "Ahri",
        "title": "the Nine-Tailed Fox",
        "description": "Unlike other foxes that roamed the woods of southern Ionia, Ahri had always felt a strange connection to the magical world around her; a connection that was somehow incomplete.",
        "created_at": null,
        "updated_at": "2019-11-01 17:59:21",
        "deleted_at": null,
        "image": "champImage\/d43vI6tGbJUbtjhNNzegvHTK5HFdJrotMVXZqw5S.png",
        "role_id": null,
        "champion_skills": [
            {
                "id": 5,
                "small_name": "AhriQ",
                "name": "Orb of Deception",
                "description": "hri sends out and pulls back her orb, dealing magic damage on the way out and true damage on the way back. Ahri gains movement speed that decays while her orb is traveling.",
                "champ_id": 2,
                "created_at": null,
                "updated_at": "2019-11-06 23:49:42",
                "deleted_at": null,
                "image": "champSkills\/r1aAkHeXLg3Q7jcZrsggP8BQTfn8hg7DWTcq4558.png"
            },
            {
                "id": 6,
                "small_name": "AhriW",
                "name": "Fox-Fire",
                "description": "Ahri releases three fox-fires, that lock onto and attack nearby enemies.",
                "champ_id": 2,
                "created_at": null,
                "updated_at": "2019-11-06 23:49:50",
                "deleted_at": null,
                "image": "champSkills\/y0ohggyh8mT0eFWaFYF9CySiGP0AY0CBY5fwGc2e.png"
            },
            {
                "id": 7,
                "small_name": "AhriE",
                "name": "Charm",
                "description": "Ahri blows a kiss that damages and charms an enemy it encounters, causing them to walk harmlessly towards her.",
                "champ_id": 2,
                "created_at": null,
                "updated_at": "2019-11-06 23:49:56",
                "deleted_at": null,
                "image": "champSkills\/5qehj3IeF0hrQ5MRUhjWXqbTQG2Lflae1ytKfSss.png"
            },
            {
                "id": 8,
                "small_name": "AhriR",
                "name": "Spirit Rush",
                "description": "Ahri dashes forward and fires essence bolts, damaging 3 nearby enemies (prioritizes Champions). Spirit Rush can be cast up to three times before going on cooldown.",
                "champ_id": 2,
                "created_at": null,
                "updated_at": "2019-11-06 23:50:03",
                "deleted_at": null,
                "image": "champSkills\/puzfVvKeRR98YyOvrPucjIBoAQFYIMuag5ORHbvY.png"
            }
        ],
        "champion_skins": [
            {
                "id": 3,
                "name": "Default",
                "image": "champSkin\/utxwKYbdsgbYqi6KDlnEHaOlIlSQ1WT3hIriVia9.jpeg",
                "champ_id": 2,
                "created_at": "2019-11-07 00:37:35",
                "updated_at": "2019-11-07 00:37:35",
                "deleted_at": null
            },
            {
                "id": 4,
                "name": "Dynasty Ahri",
                "image": "champSkin\/Yn7LG6p4EIOYwVbmTnvGJ5DVjYI5xmPySi9bnDqF.jpeg",
                "champ_id": 2,
                "created_at": "2019-11-07 00:37:48",
                "updated_at": "2019-11-07 00:37:48",
                "deleted_at": null
            }
        ]
    },
    {
        "id": 3,
        "name": "Akali",
        "title": "the Rogue Assassin",
        "description": "There exists an ancient order originating in the Ionian Isles dedicated to the preservation of balance. Order, chaos, light, darkness -- all things must exist in perfect harmony for such is the way of the universe.",
        "created_at": "2019-10-14 22:04:26",
        "updated_at": "2019-11-01 17:59:42",
        "deleted_at": null,
        "image": "champImage\/nFyg40VMyjZoZaS9iHS1Vkx83myTxWIOqvdOicoq.png",
        "role_id": null,
        "champion_skills": [
            {
                "id": 11,
                "small_name": "AkaliW",
                "name": "Twilight Shroud",
                "description": "Akali teleports to a nearby location, leaving a cover of smoke at her previous location. While inside the shroud, Akali becomes Invisible and gains Movement Speed. Attacking or using abilities will briefly reveal her.",
                "champ_id": 3,
                "created_at": "2019-10-24 21:48:39",
                "updated_at": "2019-10-24 21:48:39",
                "deleted_at": null,
                "image": "champSkills\/2cycg6fjXsYNuRs5rXCHseZcZ9UGcmbHNW7Sow7K.png"
            },
            {
                "id": 12,
                "small_name": "AkaliE",
                "name": "Shuriken Flip",
                "description": "lip backward and fire a shuriken forward, dealing physical damage. The first enemy or smoke cloud hit is marked. Re-cast to dash to the marked target, dealing additional damage.",
                "champ_id": 3,
                "created_at": "2019-10-24 21:51:53",
                "updated_at": "2019-10-24 21:51:53",
                "deleted_at": null,
                "image": "champSkills\/D7XFTnMGwogFks3U8HAerHkozgLjyWR01g2hXYef.png"
            },
            {
                "id": 13,
                "small_name": "AkaliR",
                "name": "Perfect Execution",
                "description": "Akali leaps in a direction, damaging enemies she strikes. Re-cast: Akali dashes in a direction, executing all enemies she strikes.",
                "champ_id": 3,
                "created_at": "2019-10-24 21:52:53",
                "updated_at": "2019-10-24 21:52:53",
                "deleted_at": null,
                "image": "champSkills\/1aKW7A7mWfz4Ah9NszYF9x3edfps7ojHJoeGIauE.png"
            },
            {
                "id": 15,
                "small_name": "AkaliQ",
                "name": "Five Point Strike",
                "description": "Akali throws out five kunai, dealing damage based on her bonus Attack Damage and Ability Power and slowing.",
                "champ_id": 3,
                "created_at": "2019-11-05 21:56:11",
                "updated_at": "2019-11-05 21:56:11",
                "deleted_at": null,
                "image": "champSkills\/yEk0L3a5TY1f8uKT8ZfQQjAQiR5u8Z1X3yuFJ7dr.png"
            }
        ],
        "champion_skins": []
    },
    {
        "id": 4,
        "name": "Alistar",
        "title": "the Minotaur",
        "description": "As the mightiest warrior to ever emerge from the Minotaur tribes of the Great Barrier, Alistar defended his tribe from Valoran's many dangers; that is, until the coming of the Noxian army.",
        "created_at": "2019-10-24 21:59:35",
        "updated_at": "2019-10-24 21:59:35",
        "deleted_at": null,
        "image": "champImage\/VqA1AAxWPvOAhiFqPnjOt3DmS3FAMPlM3El5Fajt.png",
        "role_id": null,
        "champion_skills": [
            {
                "id": 14,
                "small_name": "AlistarQ",
                "name": "Pulverize",
                "description": "Alistar smashes the ground, dealing damage to nearby enemies and tossing them into the air.",
                "champ_id": 4,
                "created_at": "2019-11-05 21:37:38",
                "updated_at": "2019-11-05 21:37:38",
                "deleted_at": null,
                "image": "champSkills\/hMYmWjc3SPf6t0l3LMmHYhCXc1gFiZR5B2gTGKCl.png"
            }
        ],
        "champion_skins": []
    },
    {
        "id": 5,
        "name": "Amumu",
        "title": "the Sad Mummy",
        "description": "A lonely and melancholy soul from ancient Shurima, Amumu roams the world in search of a friend. Cursed by an ancient spell, he is doomed to remain alone forever.",
        "created_at": "2019-10-24 22:01:19",
        "updated_at": "2019-10-24 22:01:19",
        "deleted_at": null,
        "image": "champImage\/1MiNCQnSQsgaOYZVdlvItazG2xLpjrLFuZCoIHrK.png",
        "role_id": null,
        "champion_skills": [],
        "champion_skins": []
    },
    {
        "id": 6,
        "name": "Anivia",
        "title": "the Cryophoenix",
        "description": "Anivia is a being of the coldest winter, a mystical embodiment of ice magic, and an ancient protector of the Freljord. She commands all the power and fury of the land itself, calling the snow and bitter wind to defend her home",
        "created_at": "2019-10-24 22:15:31",
        "updated_at": "2019-10-24 22:15:31",
        "deleted_at": null,
        "image": "champImage\/Wxqeveh8NuTFNS1DyoQ5DO9YCGrfWsOoNJhiES8U.png",
        "role_id": null,
        "champion_skills": [],
        "champion_skins": []
    },
    {
        "id": 7,
        "name": "Annie",
        "title": "the Dark Child",
        "description": "There have always been those within Noxus who did not agree with the evils perpetrated by the Noxian High Command. The High Command had just put down a coup attempt from the self-proclaimed Crown Prince Raschallion",
        "created_at": "2019-10-24 22:18:11",
        "updated_at": "2019-10-24 22:18:11",
        "deleted_at": null,
        "image": "champImage\/lKjRXbzQD2koddgW3UiMTjQlAsYTq44HfhaEXS0B.png",
        "role_id": null,
        "champion_skills": [],
        "champion_skins": []
    },
    {
        "id": 8,
        "name": "Ashe",
        "title": "the Frost Archer",
        "description": "Iceborn warmother of the Avarosan tribe, Ashe commands the most populous horde in the north. Stoic, intelligent, and idealistic, yet uncomfortable with her role as leader, she taps into the ancestral magics of her lineage to wield a bow of True Ice.",
        "created_at": "2019-11-01 18:19:55",
        "updated_at": "2019-11-01 18:19:55",
        "deleted_at": null,
        "image": "champImage\/ynibEsp54MoMhHBK0RUdwjHNzRYmrh8T7d9zaOCh.png",
        "role_id": null,
        "champion_skills": [],
        "champion_skins": []
    },
    {
        "id": 9,
        "name": "Aurelion Sol",
        "title": "the Star Forger",
        "description": "Aurelion Sol once graced the vast emptiness of the cosmos with celestial wonders of his own devising. Now, he is forced to wield his awesome power at the behest of a space-faring empire that tricked him into servitude.",
        "created_at": "2019-11-01 18:22:01",
        "updated_at": "2019-11-01 18:22:01",
        "deleted_at": null,
        "image": "champImage\/MshO4Jfw56QzXIFIq30GeNIgHegbgZSO4gUzYJbu.png",
        "role_id": null,
        "champion_skills": [],
        "champion_skins": []
    },
    {
        "id": 10,
        "name": "Azir",
        "title": "the Emperor of the Sands",
        "description": "zir was a mortal emperor of Shurima in a far distant age, a proud man who stood at the cusp of immortality. His hubris saw him betrayed and murdered at the moment of his greatest triumph, but now, millennia later, he has been reborn",
        "created_at": "2019-11-01 18:24:34",
        "updated_at": "2019-11-01 18:24:34",
        "deleted_at": null,
        "image": "champImage\/pQdedG7z0e4grMMefzT3ldQ0Lf6F9y3OU6r32q7s.png",
        "role_id": null,
        "champion_skills": [],
        "champion_skins": []
    },
    {
        "id": 11,
        "name": "Bard",
        "title": "the Wandering Caretaker",
        "description": "traveler from beyond the stars, Bard is an agent of serendipity who fights to maintain a balance where life can endure the indifference of chaos. Many Runeterrans sing songs that ponder his extraordinary nature",
        "created_at": "2019-11-07 23:12:38",
        "updated_at": "2019-11-07 23:12:38",
        "deleted_at": null,
        "image": "champImage\/zaKmzI0NdxTEz8Ccg1YB3ov4crUVeyEOAmpNlJ0K.png",
        "role_id": null,
        "champion_skills": [],
        "champion_skins": []
    },
    {
        "id": 12,
        "name": "Blitzcrank",
        "title": "the Great Steam Golem",
        "description": "Blitzcrank is an enormous, near-indestructible automaton from Zaun, originally built to dispose of hazardous waste. However, he found this primary purpose too restricting, and modified his own form to better serve the fragile people",
        "created_at": "2019-11-07 23:15:38",
        "updated_at": "2019-11-07 23:15:38",
        "deleted_at": null,
        "image": "champImage\/VqwEqGFGb7qYawOaY95WQdw5Trx32TJJiGeO79iU.png",
        "role_id": null,
        "champion_skills": [],
        "champion_skins": []
    },
    {
        "id": 13,
        "name": "Brand",
        "title": "the Burning Vengeance",
        "description": "Once a tribesman of the icy Freljord named Kegan Rodhe, the creature known as Brand is a lesson in the temptation of greater power. Seeking one of the legendary World Runes, Kegan betrayed his companions and seized it for himself",
        "created_at": "2019-11-07 23:16:37",
        "updated_at": "2019-11-07 23:16:37",
        "deleted_at": null,
        "image": "champImage\/OnHkYkp7JxmxiaYsPVFfZi5pu7zhaNc7vGoM1ua8.png",
        "role_id": null,
        "champion_skills": [],
        "champion_skins": []
    },
    {
        "id": 14,
        "name": "Braum",
        "title": "the Heart of the Freljord",
        "description": "Blessed with massive biceps and an even bigger heart, Braum is a beloved hero of the Freljord. Every mead hall north of Frostheld toasts his legendary strength, said to have felled a forest of oaks in a single night",
        "created_at": "2019-11-07 23:28:15",
        "updated_at": "2019-11-07 23:28:15",
        "deleted_at": null,
        "image": "champImage\/Braum\/CYS9CQ1CM8J5dUCmzxAFUtzux1ooCcQv8spInBVO.png",
        "role_id": null,
        "champion_skills": [],
        "champion_skins": []
    }
]
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
    "updated_at": "2019-11-08 00:41:36",
    "deleted_at": null,
    "image": "champImage\/N5MTPubNTfxxQlbWjIh0mihcjbmdNrXYIIXGY0Rc.png",
    "role_id": null
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


