<template>

<div>
<br><br>
<a href="newperson" class="btn btn-primery"> Create New</a>
<br><br>
<table class="table table-striped">
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Gender</th>
<th>Photo</th>
<tr v-for="person in persons">
<td>{{person.name}}</td>
<td>{{person.email}}</td>
<td>{{person.phoneno}}</td>
<td>{{person.gender}}</td>
<td> <img :src="'http://localhost/laravelvue/public/images/'+person.image"  width="80" height="60"/>

</td>
</tr>
</table>
</div>

</template>
<script>
export default
{
	data()
	{
		return {persons:[]}
		
	},
	created()
	{
   this.fetchPerson();

	},

methods:
{
	fetchPerson()
	{
	this.$http.get('/laravelvue/public/person').then(response =>{
	this.persons=response.data.persons;
	    });
	}
}

}
</script>