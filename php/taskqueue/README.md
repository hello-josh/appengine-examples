# PHP TaskQueue

This example shows how to enqueue a `PushTask` to execute a request outside of the current HTTP request


## App Engine [Issue #11472](https://code.google.com/p/googleappengine/issues/detail?id=11472)

The [documentation for PushTask](https://cloud.google.com/appengine/docs/php/taskqueue/overview-push#PHP_Task_execution) says that you can pass in a Host header and the task will run on that version when executed.

When running locally under the development server, the Host header is ignored and the task executes under the hostname passed to `dev_appserver.py --host` or the default value of `localhost`

### Steps to reproduce
1. Launch the application in this directory (or use `launch.sh`)
1. Open your web browser to the app's default module [http://localhost:8080](http://localhost:8080)
1. View the error log and see the Host value set to the incorrect value