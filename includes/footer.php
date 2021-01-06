     </div>
     <?php 
               if(isset($_SESSION['user'])){
                    echo '
                    <div class="footer text-center">
                    <h5 class="bg-dark text-white p-2 m-0">@Developed By EzsKey</h5>
                    </div>  
                    ';
               }else{
                    echo '
                    <div class="fixed-bottom footer text-center">
                    <h5 class="bg-dark text-white p-2 m-0">@Developed By EzsKey</h5>
               </div>  
                    ';
               }
                
     ?> 
</body>
</html>
