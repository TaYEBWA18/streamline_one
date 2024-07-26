<?php

namespace App\Observers;

use App\Models\Patient;
use Illuminate\Support\Facades\Log;

class PatientsObserver //Event listening class attached to the model Patients
{
    /**
     * Handle the Patient "created" event.
     */
    public function creating(Patient $patient): void
    {
        Log::info('Patients First name has been created with: ' . $patient->first_name);

    }

    public function created(Patient $patient): void
    {
         Log::info('Patients First name has been created with: ' . $patient->first_name);
        $patient_name = $patient->first_name.' '.$patient->last_name;
        //$patient->slug=Str::slug($patient_name);
       // $patient->slug=$slug

    }

    /**
     * Handle the Patient "updated" event.
     */
    public function updated(Patient $patient): void
    {
        $patient->first_name = "Patients First name has been updated";
    }

    /**
     * Handle the Patient "deleted" event.
     */
    public function deleted(Patient $patient): void
    {
        //
    }

    /**
     * Handle the Patient "restored" event.
     */
    public function restored(Patient $patient): void
    {
        //
    }

    /**
     * Handle the Patient "force deleted" event.
     */
    public function forceDeleted(Patient $patient): void
    {
        //
    }
}
