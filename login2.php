<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .div1{
            height:220px;
            width:200px;
            margin-left: 50px;
            border: 1px solid gray;
            border-radius: 8px;
            padding: 30px;
            margin-top: 50px;
            background-color: white;
            box-shadow: 0px 0px 5px 2px gray;
        }
        input[type='submit']{
             background-color: green;
             border-radius: 8px;
             height:30px;
             color:white;
             margin-top:-28%;
        }
        
        .name{
             margin-left: -20px;

        }
    </style>
</head>
<body>
    <div class="div1">
        <form action="connect.php"method='post'>
            <label>Name:
                <input type="text"placeholder='Enetr the Name'name='name'>
            </label><br><br>
            <label>Email:
                <input type="gmail"placeholder='Enter the email'name='email'>
            </label><br><br>
            <label class="name">
                Password:
                <input type="password"placeholder='Enter the password'name='password'class='pass'>
            </label>
            <label><br><br>
                    <!-- Gender:<br>
                    <label>
                        Male:
                        <input type="radio"name='gender'name='male'>
                    </label>
                    <label>
                        Female:
                        <input type="radio"name='gender'name='female'>
                    </label> -->
            </label><br><br>
            <input type="submit"value='Login'class='btn'>
        </form>
    </div>
    <script>
          var btn=document.querySelector('.btn');
          btn.addEventListener('click',()=>{
               btn.style.color='red';
               async function data(){
                try{
                    const response = await fetch('./dummy.json');
                    if(!response.ok){
                        throw new Error('data dose not respose on the browser');
                    }
                    const data= await response.json();
                    console.table(data);
                }
                catch(error){
                    console.log('data dose not send');
                }
               }
               data();
          })
    </script>
</body>
</html>