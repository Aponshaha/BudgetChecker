<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

<link rel="stylesheet" href="css/style.css">
 
  

</head>
<body>

  <div class="top">
    <div class="budget">
      <div class="budget__title">
        Available Budget in <span class="budget__title--month">%Month%</span>:
      </div>

      <div class="budget__value">+ 2,345.64</div>

      <div class="budget__income clearfix">
        <div class="budget__income--text">Income</div>
        <div class="right">
          <div class="budget__income--value">+ 4,300.00</div>
          <div class="budget__income--percentage">&nbsp;</div>
        </div>
      </div>

      <div class="budget__expenses clearfix">
        <div class="budget__expenses--text">Expenses</div>
        <div class="right clearfix">
          <div class="budget__expenses--value">- 1,954.36</div>
          <div class="budget__expenses--percentage">45%</div>
        </div>
      </div>
    </div>
  </div>


  <div class="bottom">
    <div class="add">
      <div class="add__container">
        <select class="add__type">
                        <option value="inc" selected>+</option>
                        <option value="exp">-</option>
                    </select>
        <input type="text" class="add__description" placeholder="Add description">
        <input type="number" class="add__value" placeholder="Value">
        <button class="add__btn"><i class="ion-ios-checkmark-outline"></i></button>
      </div>
    </div>

    <div class="container clearfix">
      <div class="income">
        <h2 class="income__title">Income</h2>

        <div class="income__list">
        </div>
      </div>


      <div class="expenses">
        <h2 class="expenses__title">Expenses</h2>

        <div class="expenses__list">
        </div>
      </div>
    </div>
  </div>

  @include('javascript')
  </body>
</html>

  
    

