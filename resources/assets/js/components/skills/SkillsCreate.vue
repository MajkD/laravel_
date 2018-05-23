<template>
  <div>
    <div class="form-group">
      <router-link to="/" class="btn btn-default">Back</router-link>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">Create New Skill</div>
      <div class="panel-body">
        <form v-on:submit="saveForm()">
          <div class="row">
            <div class="col-xs-12 form-group">
              <label class="control-label">Skill name</label>
              <input type="text" v-model="skill.name" class="form-control">
            </div>
            <div class="col-xs-12 form-group">
              <label class="control-label">Skill description</label>
              <input type="text" v-model="skill.description" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 form-group">
              <button class="btn btn-success">Create</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
    export default {
        data: function () {
            return {
                skill: {
                    name: ''
                }
            }
        },
        methods: {
            saveForm() {
                var app = this;
                var newSkill = app.skill;
                axios.post('/api/v1/skills', newSkill)
                    .then(function (resp) {
                        console.log(resp);
                        app.$router.push({path: '/'});
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Could not create your skill");
                    });
            }
        }
    }
</script>