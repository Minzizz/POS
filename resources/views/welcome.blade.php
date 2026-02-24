<html>
    <head>
        <title>POS System</title><div style='text-align: center;'>
        <h1 >Welcome to POS System</h1>
        </div>
    </head>
    <body><div style='text-align: center;'>
        <p>This is the welcome page of the POS System.</p>
        <p>These are the available categories:</p>
        <a href="{{ route('category.foodBeverage') }}"><button>View Food & Beverage Category</button></a>
        <a href="{{ route('category.beautyHealth') }}"><button>View Beauty & Health Category</button></a>
        <a href="{{ route('category.homeCare') }}"><button>View Home Care Category</button></a>
        <a href="{{ route('category.babyKid') }}"><button>View Baby & Kid Category</button></a>
        </div>
        <a href="{{ route('userPage', ['userID' => 1, 'name' => 'Aziz']) }}"><button style="position: fixed; top: 20px; right: 20px; z-index: 1000;">
    User Profile ✌️</a>
</button>
    </body>
</html>