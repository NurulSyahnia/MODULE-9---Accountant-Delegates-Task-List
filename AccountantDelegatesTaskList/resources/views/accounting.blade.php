<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Read</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <style>
        table,th,tr,td {
            border-collapse: collapse;
            border: 1px solid black;
            padding-left: 1.5em; 
            padding: 15px;
            text-align: center;

        }

        header {
            background-color: lightblue;
            padding: : 1em;

        }

        th {
          background-color: #4CAF50;
          color: white;
          }

        h1 {
          
          color: black;
          text-align: center;
          }

        p {
          font-family: verdana;
          font-size: 20px;
          }

          ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: #333;
          }

          li {
          float: left;
          }

          li a {
          display: block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          }

          li a:hover:not(.active) {
          background-color: #111;
          }

          .active {
          background-color: grey;
          }

      header, footer {
          padding: 1em;
          color: white;
          background-color: lightblue;
          clear: left;
          text-align: center;
          }

        nav {
          float: left;
          max-width: 160px;
          margin: 0;
          padding: 1em;
        }

        nav ul {
          list-style-type: none;
          padding: 0;
        }
   
        nav ul a {
          text-decoration: none;
        }

        article {
          margin-left: 170px;
          border-left: 1px solid gray;
          padding: 1em;
          overflow: hidden;
        }

        </style>

    </head>
    
    
    <body>
  
    <header>
      <h1 align="center">Finance & Accounting </h1>
    </header>
     <ul>
      <li><a  href="#home">Home</a></li>
      <li><a href="index">Task</a></li>
      <li><a href="index2">Files</a></li>
      <li><a class="active" href="index1">Account</a></li>
      <li style="float:right"><a href="#about">John Doe</a></li>

    </ul>

    <h4 align="center">Account List</h4>
    <hr>
       <table style="width:50%" align="center">
           <thead>
               <th>Id</th>
               <th>Name</th>
               <th>Chart of Account</th>
               <th>Type</th>
           </thead>
           @foreach($acco as $users)
           <tr>
               <td>{{$users->id}}</td>
               <td>{{$users->name}}</td>
               <td>{{$users->coa}}</td>
               <td>{{$users->type}}</td>
           </tr>
           @endforeach
       </table>

    </body>
</html>