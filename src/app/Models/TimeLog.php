<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimeLog extends Model
{
    protected $fillable = ['user_id', 'start_time', 'end_time','project_id'];

    /**
     * Get evaluation data for a specific user.
     *
     * @param int $userId The ID of the user.
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getEvaluationDataForUser($userId)
    {
        return self::selectRaw('DATE(start_time) as date, start_time')
            ->where('user_id', $userId) // Filter by user_id
            ->groupBy('date', 'start_time')
            ->orderBy('date')
            ->orderBy('start_time')
            ->get();
    }

     /**
     * Get the project associated with the time log.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

}
