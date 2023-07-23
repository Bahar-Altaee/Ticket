<template>
  <div>
    <draggable v-model="columns" :options="dragOptions">
      <div v-for="(column, index) in columns" :key="index" class="column">
        <h3>{{ column.name }}</h3>
        <draggable v-model="column.tasks" :options="dragOptions" class="task-list">
          <div v-for="(task, taskIndex) in column.tasks" :key="task.id" class="task">
            {{ task.name }}
          </div>
        </draggable>
      </div>
    </draggable>
  </div>
</template>

<script>
import draggable from 'vuedraggable';

export default {
  components: {
    draggable,
  },
  data() {
    return {
      dragOptions: {
        group: 'tasks',
        animation: 150,
      },
      columns: [
        {
          name: 'Todo',
          tasks: [
            { id: 1, name: 'Task 1' },
            { id: 2, name: 'Task 2' },
          ],
        },
        {
          name: 'In Progress',
          tasks: [
            { id: 3, name: 'Task 3' },
            { id: 4, name: 'Task 4' },
          ],
        },
        {
          name: 'Done',
          tasks: [
            { id: 5, name: 'Task 5' },
            { id: 6, name: 'Task 6' },
          ],
        },
      ],
    };
  },
};
</script>

<style scoped>
.column {
  margin: 10px;
  padding: 10px;
  background-color: #f2f2f2;
}

.task-list {
  margin-top: 10px;
  padding: 10px;
  background-color: #fff;
}

.task {
  margin: 5px;
  padding: 5px;
  background-color: #eaeaea;
  cursor: move;
}
</style>
