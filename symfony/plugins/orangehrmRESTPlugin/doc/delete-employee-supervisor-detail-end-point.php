/**
* @api {post} /employee/:id/supervisor Delete Supervisor Details
* @apiName deleteEmployeeSupervisor
* @apiGroup Employee
* @apiVersion 0.1.0
*
* @apiParam {Number}  employee id
*
* @apiParam {String} name Supervisor name.
* @apiParam {Number} supervisorId Supervisor id.
* @apiParam {String} reportingMethod Reporting method to the supervisor.
* @apiSuccess {Object} data success response
*
* @apiSuccessExample Success-Response:
*     HTTP/1.1 200 OK
*
* @apiSuccessExample Success-Response:
*     HTTP/1.1 200 OK
*
*      {
*        "success": "Successfully deleted"
*      }
*
* @apiError Bad-Response Saving failed.
*
* @apiErrorExample Error-Response:
*     HTTP/1.1 400 Bad Request
*     {
*       "error": ["Supervisor not found"]
*     }
*/
