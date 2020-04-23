<template>
<div class="container">
  <div class="row">


       <form class="form-horizontal"><br><br>
          <fieldset>
           <legend>MusicApp</legend>
    
            <app-search></app-search>
           
        
         </fieldset>
        </form>

  </div>

  <div class="row">
  <app-result></app-result>
    

  </div>

</div>
</template>

<script>
   import SearchArea from './SearchArea.vue'
   import ResultArea from './ResultArea.vue'
   export default {
   
   components:{
     'app-search':SearchArea,
     'app-result':ResultArea
   }

     
}
    

</script>

<style></style>


