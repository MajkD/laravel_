<template>
  <div>

    <div class="panel panel-default">
      <div class="panel-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th width="150">&nbsp;</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="skill, index in skills">
                <td>{{ skill.name }}</td>
                <td>{{ skill.description }}</td>
                <td>
                    <router-link :to="{name: 'editSkill', params: {id: skill.id}}" class="btn btn-xs btn-default">
                        Edit
                    </router-link>
                    <a href="#"
                       class="btn btn-xs btn-danger"
                       v-on:click="deleteEntry(skill.id, index)">
                        Delete
                    </a>
                </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="form-group">
      <router-link :to="{name: 'createSkill'}" class="btn btn-success">Create New Skill</router-link>
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
        methods: {
            deleteEntry(id, index) {
                if (confirm("Do you really want to delete it?")) {
                    var app = this;
                    axios.delete('/api/v1/skills/' + id)
                        .then(function (resp) {
                            app.skills.splice(index, 1);
                        })
                        .catch(function (resp) {
                            alert("Could not delete skill");
                        });
                }
            }
        }
    }
</script>