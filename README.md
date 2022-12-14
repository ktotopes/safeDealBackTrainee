# Api Dock

# Api information

|    Обозначение |                   Описание                   |
|---------------:|:--------------------------------------------:|
|    HTTP Method |                     GET                      |
|        API URL |    **http://safedeal.test/api/v1/orders**    |
|       Response format |                   **JSON**                   |

|     |                                                |
|---------------:|:----------------------------------------------:|
|    HTTP Method |                      GET                       |
|        API URL | **http://safedeal.test/api/v1/orders/{order}** |
|       Response format |                    **JSON**                    |

|     |                                              |
|---------------:|:--------------------------------------------:|
|    HTTP Method |                   GET/POST                   |
|        API URL | **http://safedeal.test/api/v1/orders/store** |
|       Response format |                   **JSON**                   |

|     |                                                |
|---------------:|:----------------------------------------------:|
|    HTTP Method |                      GET                       |
|        API URL | **http://safedeal.test/api/v1/delivery-price** |
|       Response format |                    **JSON**                    |

### Order list

#### Example:

**http://safedeal.test/api/v1/orders**

#### Form:

```html

<form action="http://safedeal.test/api/v1/orders" method="GET">
    <input type="submit">
</form>
```

#### Response:

```php
[
  {
    id	1
    name	"Marjorie Daugherty"
    price	39.01
    count	4
    created_at	"2022-11-03T17:06:37.000000Z"
    updated_at	"2022-11-03T17:06:37.000000Z"
  },
  {
    id	2
    name	"Mr. Joseph Hintz IV"
    price	52.57
    count	2
    created_at	"2022-11-03T17:06:37.000000Z"
    updated_at	"2022-11-03T17:06:37.000000Z"
  }
]
```

### Order show

|     Name |  Param   | Value   | Description            |
|---------:|:--------:|:--------|:-----------------------|
| Order ID | [order]  | integer | -                      |

#### Example:

**http://safedeal.test/api/v1/orders/1**

#### Form:

```html

<form action="http://safedeal.test/api/v1/orders" method="POST">
    <input type="text" name="order">
    <input type="submit">
</form>
```

#### Response:

```php
[
  {
    id	1
    name	"Marjorie Daugherty"
    price	39.01
    count	4
    created_at	"2022-11-03T17:06:37.000000Z"
    updated_at	"2022-11-03T17:06:37.000000Z"
  },
]
```

### Order store

|   Name |  Param   | Value   | Description                                    |
|-------:|:--------:|:--------|:-----------------------------------------------|
|   name |  [name]  | string  | Username                                       |
|  price | [price]  | integer | user order price                               |
|  count | [count]  | integer | number of items ordered                        |

#### Example:

**http://safedeal.test/api/v1/orders/store?name=aluice&price=5&count=2**

#### Form:

```html

<form action="http://safedeal.test/api/v1/orders" method="POST">
    <input type="text" name="name">
    <input type="text" name="price">
    <input type="text" name="count">
    <input type="submit">
</form>
```

#### Response:

```php
[
  {
     "id": 12
  },
]
```

### Delivery price

|             Name |      Param       | Value  | Description                  |
|-----------------:|:----------------:|:-------|:-----------------------------|
| Delivery address |      [name]      | string | delivery address to the user |

#### Example:

**http://safedeal.test/api/v1/delivery-price**

#### Form:

```html

<form action="http://safedeal.test/api/v1/delivery-price" method="POST">
    <input type="text" name="delivery_address">
    <input type="submit">
</form>
```

#### Response:

```php
[
  {
     "delivery": 120 'rub'
  },
]
```

### Errors

| Code |   Type   | Error                   | 
|-----:|:--------:|:------------------------|
|  422 | Validation | {<br/>"error":"is required"<br/>} |


