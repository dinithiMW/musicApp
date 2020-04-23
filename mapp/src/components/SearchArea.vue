<template>

            <div class="form-group">
                 <label for="exampleInputEmail1">Search Music</label>
                 <input type="text" class="form-control" id="exampleInputsong" aria-describedby="emailHelp" placeholder="Type here" @input="keyPressed">
      
            </div>

</template>


<script>
    export default{
         methods:{
             keyPressed(event) {
                  var key=event.target.value;
                  console.log(key)

             } 

         }
    }
    

</script>


<style></style>