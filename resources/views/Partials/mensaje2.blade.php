<div>

    @if (session('mensaje2'))

    <div class="alert alert-danger" id="mensaje2">
        {{session('mensaje2')}}
    </div>
        
    @endif

        <script>
            document.addEventListener('DOMContentLoaded',function(){
                const mensaje=document.getElementById('mensaje2');
                
                if(mensaje)
            {
                setTimeout(() => {
                   mensaje.remove(); 
                }, 3000);
            }
            });
            
        </script>
</div>