### Overview

## Magento 2 EonInfosys_Review



Magento_Review Core Module no review with ratings Api end-Point , this module added review with ratings api end point



Methods: Get
Url: http://www.eonbazar.lan/rest/default/V1/eonb/categories?rootCategoryId=4

![](doc/categoryImgApi.png)





Currently, Magento 2 does not provide the REST API for the Reviews Extension of the products.
This module implement WebAPI for product reviews (partially)

Module allow:
- Get one review
- Create review with ratings
- Update review with ratings
- Search reviews
- Get product reviews

| Resource | Request method | Description |
| ------------- | ------------- | ------------- |
| /V1/reviews/:id | GET | Get one review |
| /V1/reviews/:id | PUT | Update review |
| /V1/reviews/:id | DELETE | Delete review |
| /V1/reviews/ | POST | Create review |
| /V1/reviews/ | GET |  Search reviews |
| /V1/products/:sku/reviews | GET | Get product reviews |



# Review REST APIs

## POST /V1/reviews/
Create review with ratings.

### REQUEST BODY
Create review with ratings
```json
{
  "review": {
    "title": "Review title",
    "detail": "Empty review datails!",
    "nickname": "Nickname",
    "ratings": [
      {
        "rating_name": "Rating",
        "value": 1
      },
      {
        "rating_name": "Quality",
        "value": 1
      }
    ],
    "review_entity": "product",
    "review_status": 2,
    "entity_pk_value": 14
  }
}
```

Create review without ratings
```json
{
  "review": {
    "title": "Review!!1",
    "detail": "Empty review datails!",
    "nickname": "Nickname",
    "review_entity": "product",
    "review_status": 2,
    "entity_pk_value": 14
  }
}

```


### RESPONSE BODY
```json
{
  "id": 105,
  "title": "Review title",
  "detail": "Empty review datails!",
  "nickname": "Nickname",
  "ratings": [
    {
      "vote_id": 131,
      "rating_id": 4,
      "rating_name": "Rating",
      "percent": 20,
      "value": 1
    },
    {
      "vote_id": 132,
      "rating_id": 1,
      "rating_name": "Quality",
      "percent": 60,
      "value": 3
    }
  ],
  "review_entity": "product",
  "review_type": 2,
  "review_status": 2,
  "created_at": "2019-09-16 08:31:44",
  "entity_pk_value": 14,
  "store_id": 1,
  "stores": [
    0,
    1
  ]
}
```



Example: Pending status
### RESPONSE BODY
```json
{
  "review": {
    "title": "Good Product",
    "detail": "Good Product review datails!",
    "nickname": "Matin",
    "ratings": [
      {
        "rating_name": "Quality",
        "value": 5
      },
      {
        "rating_name": "Value",
        "value": 5
      },

      {
        "rating_name": "Price",
        "value": 5
      },
        {
          "rating_name": "Delivery",
          "value": 5
        }
    ],
    "review_entity": "product",
    "review_status": 2,
    "entity_pk_value": 97
  }
}

```




### Install

To install this module please  


### Developer


Thank you for watching guide.If you have any questions about this practice, please feel free to leave a comment or Please do not hesitate to contact me don't worry about charge I try to help  on my little knowledge, if you need me to join your Magento project especially extension development.


- Abdul Matin

- Skype/gmail/hangout:matinict

- Mobile/What-apps: +8801717676441

- Github: https://github.com/matinict

- Magento Developer Program Member & Community Contributors
