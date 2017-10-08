<template>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add New Person</div>

                    <div class="panel-body">
<form class="col-md-6" id="addr" action="post/person"  enctype="multipart/form-data" method="post" v-on:submit.prevent="addrecord">
                    
<div class="form-group">
<label class="control-label">Name</label>
<input name="name" class="form-control" v-model="person.name" v-validate="'required'" data-vv-delay="500" :class="{'input': true, 'is-danger': errors.has('name') }" type="text" placeholder="Name">
            <span v-show="errors.has('name')" class="help is-danger">{{ errors.first('name') }}</span>
</div>

        <div class="form-group">
        <label class="control-label">Email</label>
         <input class="form-control" v-model="person.email" name="email" v-validate="'required|email|max:50'"  data-vv-delay="1000"  type="text" placeholder="Email">
            <span v-show="errors.has('email')" class="is-danger">{{ errors.first('email') }}</span>
        </div>

        <div class="form-group">
        <label class="control-label">Phone No</label>
         <input class="form-control" name="phoneno" v-model='person.phoneno' v-validate="'required|numeric|min:11|max:15'"  data-vv-delay="1000"  type="text" placeholder="Phone No">
            <span v-show="errors.has('phoneno')" class="is-danger">{{ errors.first('phoneno') }}</span>
        </div>
        <div class="from-group">
         <label class="control-label">Date Of Birth</label>
         <input type="text" class="form-control" v-model='person.dob' name="dob" v-validate="'required|date_format:DD/MM/YYYY'" placeholder="DD/MM/YYYY">
          <span v-show="errors.has('dob')" class="is-danger">{{ errors.first('dob') }}</span>
        </div>
        <div class="form-group">
        <label class="control-label">Gender</label>
        Male <input type="radio" v-model='person.gender' name='gender' value="male">
         Female <input type="radio" v-model='person.gender' name='gender' value="female">
        </div>

        <div class="form-group">
        <label class="control-label">Bio</label>
        <textarea class="form-control" v-model='person.bio' name="bio" v-validate="'required|max:100|min:3'"></textarea>
        <span v-show="errors.has('bio')" class="is-danger">{{errors.first('bio')}}</span>
        </div>
    <div class="from-group">
    <label class="control-label">Image</label>
    <input type="file"  name="image" @change="imageChange" v-validate="'required|image|size:1000'" >
     <span class="is-danger">{{ errors.first('image') }}</span>
    </div>


        <div class="form-group">
<button class="btn btn-success" type="submit">Create New</button>
        </div>
       
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
  

</template>

<script>
Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');
    export default {
     data: function () {
      return {
       person:{
       name:'',
       email:'',
       phoneno:'',
       dob:'',
       bio:'',
       gender:'',
       image:'',

       }
      };
    },
     
 methods: {

 imageChange (e)
 {
 console.log(e.target.files[0])
var fileReader=new FileReader()
fileReader.readAsDataURL(e.target.files[0])
fileReader.onload=(e)=>{
  
  this.person.image=e.target.result
  console.log(this.person)
}

 },
    addrecord() {
      this.$validator.validateAll().then((result) => {
        if (result) {
          // eslint-disable-next-line
        this.$http.post('post', this.person).then(response=>
        {
         window.location.href = 'http://localhost/laravelvue/public/';
        });
          return;
        }

       
      });
    }

}




    }
</script>