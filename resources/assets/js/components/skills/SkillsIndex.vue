<template>
  <div>
    <!-- <div class="form-group">
      <router-link :to="{name: 'createCompany'}" class="btn btn-success">Create new company</router-link>
    </div> -->

    <div class="panel panel-default">
      <div class="panel-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="skill, index in skills">
                <td>{{ skill.name }}</td>
                <td>{{ skill.name }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</template>



<script>
    export default {
        data: function () {
            return {
                skills: []
            }
        },
        mounted() {
            var app = this;
            axios.get('/api/v1/skills')
                .then(function (resp) {
                    app.skills = resp.data;
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Could not load skills");
                });
        },
        // methods: {
        //     deleteEntry(id, index) {
        //         if (confirm("Do you really want to delete it?")) {
        //             var app = this;
        //             axios.delete('/api/v1/companies/' + id)
        //                 .then(function (resp) {
        //                     app.companies.splice(index, 1);
        //                 })
        //                 .catch(function (resp) {
        //                     alert("Could not delete company");
        //                 });
        //         }
        //     }
        // }
    }
</script>