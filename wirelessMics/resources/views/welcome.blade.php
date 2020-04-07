<html>
	<head>
		<title>MTS Microphones Inventory</title>
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<style>
			body {
        		background-image: url("images/bg.jpg");
        		margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 900;
				font-family: 'Lato';
				text-shadow: 0px 1px 0px #ccc;
			}
			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				color: #1C1109;
				font-size: 86px;
				margin-bottom: 50px;
			}
            .subTitle {
				color: #1C1109;
				font-size: 56px;
				margin-bottom: 40px;
			}

			.link {
				margin-top: 1.5em;
				list-style: none;
                font-size: 24px;
                color: #1C1109;

			}
			.line-separator{
        	margin-top: 1.5em;
        	margin-bottom: 0px;
        	height:1px;
        	background:#660000;
        	border-bottom:3px solid #313030;
        	}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Wireless Microphones Inventory</div>
				<div class="subTitle">Media And Technology Services</div>
				 <div class="line-separator"></div>
				<div class="link">
                {{-- <li><a href="{{ url('/register') }}"><span>SignUp</span></a> |
                <a href="{{ url('/login') }}"><span>LogIn</span></a></li> --}}
                <li><a href="{{ route('register') }}"><span>SignUp</span></a> |
				<a href="{{ route ('login') }}"><span>LogIn</span></a></li>
				</div>
			</div>
		</div>
	</body>
</html>
