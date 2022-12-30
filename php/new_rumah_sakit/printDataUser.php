<htmL>

    <style>

        body::-webkit-scrollbar{
            display : none;
        }

        a{
            text-decoration : none;
            color : #7243f9; transition : 0.25s;
        }

        a:hover{
            color : #333c57;
        }

        @keyframes gelowlaikded{
            0% {
                filter: drop-shadow(0px 0px 0px #46dbe8);
            }
            20% {
                filter: drop-shadow(0px 1px 1px #46dbe8);
            }
            40% {
                filter: drop-shadow(0px 1px 3px #46dbe8);
            }
            50% {
                filter: drop-shadow(0px 1px 5px gold);
            }
            60% {
                filter: drop-shadow(0px 1px 3px #46dbe8);
            }
            80% {
                filter: drop-shadow(0px 1px 1px #46dbe8);
            }
            100% {
                filter: drop-shadow(0px 0px 0px #46dbe8);
            }
        }

        .nav-content{
            width : 90%; height : content;
            margin : 20px 20px
        }

        .content-wrapper{
            width : content; height : content;
        }

        .float-left{
            float : left;
        }

        .float-right{
            float : right;
        }

        .float-middle{
            position : absolute; top : 50%; left : 50%; transform : translate(-50%,-50%);
        }

        .vertical-middle{
            position : absolute; top : 50%; transform : translateY(-50%);
        }

        .horizontal-middle{
            position : absolute; left : 50%; transform : translateX(-50%);
        }

        body{
            background-color : white;
        }

        table{
            width : 90%; margin : auto;
            border : 2px solid #333c57; border-radius : 10px;
            box-shadow : 0px 3px 0px #333c57; font-family : "superstar";
        }

        table tr:nth-child(even){
            background-color : #ebf5f4;
        }

        table tr:nth-child(odd){
            background-color : #c8e8e6;
        }

        table tr td{
            border-bottom : 1px solid #3baaa1; border-right : 1px solid #3baaa1;
            padding : 3px 5px;
        }

        table tr td:last-child{
            border-right : 0px;
        }

        table tr:first-child{
            background-color : #3baaa1; color : #f4f4f4;
            font-family : "superstar"; font-size : 22px; letter-spacing : 2px;
        }

        table tr:last-child td{
            border-bottom : 0px;
        }

        table tr:last-child td:first-child{
            border-bottom-left-radius : 8px;
        }

        table tr:last-child td:last-child{
            border-right : 0px;  border-bottom-right-radius : 8px; border-right : 0px;
        }

        table tr th:first-child{    
            border-top-left-radius : 8px; border-top-right-radius : 8px;
        }

        #content-border{
            width : 100%; height : content;
        }

        #title-text{
            color : #333c57; font-family : "superstar"; font-size : 26px; 
            text-align : center; letter-spacing : 2px;
        }

        #logo-discord{
            content : url("discord-logo.png");
            height : 35px; width : 35px;
        }

        #logo-discord:hover{
            animation-name : gelowlaikded; animation-duration : 2s; animation-delay : 0.25s; animation-fill-mode : forwards; animation-iteration-count : infinite; animation-timing-function : ease-out;
            cursor : pointer;
        }

        #logo-eteros{
            content : url("eteros-logo.png");
            height : 30px; width : 30px; padding : 0px 20px;
        }

        #lingkaran{
            border-radius : 5px; background-color : #333c57; height : 3px; width : 15px;
            margin : 15px;
        }

        #content-text{
            padding : 0px 15px; font-family : "Ciutadella R"; font-size : 10px; color : #333c57; text-align : justify;
        }

        #outer-button{
            background-color : #333c57; border : 2px solid #333c57; border-radius : 10px;
            height : 32.7px; width : fit-content; min-width : 30px;
            margin : 5px auto;
        }

        #inner-button{
            background-color : #ebf5f4; color : #333c57;
            font-family : "superstar"; font-size : 20px;
            border : 0px; border-radius : 7px; box-shadow : 0px 6px 0px #c8e8e6;
            padding : 0px 6px; width : content; height : max-content;
            transition : 0.5s;
        }

        #inner-button:hover{
            background-color : #c8e8e6; box-shadow : 0px 6px 0px #3baaa1;
            cursor : pointer;
        }

        #answer-bar {
            background-color : #f0f7f7; color : #333c57;
            border : 1px solid #333c57 ; border-radius : 8px ;
            width : 200px ; height : content; margin : 7px; padding : 0px 5px;
            font-size : 20px; font-family : "superstar";
        }

        #trashcan-logo{
            content : url("trashcan.png");
            width : 10px; height : 10px;
            padding : 0px 10px;
        }

    </style>

    <body>
        <div class="content-wrapper">
            <div id="title-text">
                USER DATA
            </div>
        </div>

        <table cellpadding = "0"  cellspacing = "0">
            <tr>
                <td style="border-top-left-radius : 8px">No</td><td>Nama</td><td>Username</td><td>Password</td><td style="border-top-right-radius : 8px">Last Modified</td>
            </tr>
            <?php
                include "koneksi.php";

                $display = "SELECT *, DATE_FORMAT(lastmodified, '%a %d %b %Y - %H:%i:%s') AS tgl FROM pengguna ORDER BY lastmodified DESC";
                $result = mysqli_query($koneksi,$display);

                $i = 1;
                while($row=mysqli_fetch_array($result)){
                    echo '<tr><td>'.$i.'</td><td>'.$row["nama"].'</td><td>'.$row["username"].'</td><td>'.$row["katasandi"].'</td><td>'.$row["tgl"].'</td></tr>';
                    $i += 1;
                }
            ?>
        </table></center>
    </body>

</htmL>

<script>
    window.print();
</script>