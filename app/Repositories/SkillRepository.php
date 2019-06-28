<?php

namespace HelloVoisins\Repositories;

use HelloVoisins\Skill;

class SkillRepository
{
    protected $skill;

    /**
     * Inserts a skill
     * 
     * 
     */
    public function insert(Array $inputs)
    {
        return $this->skill->create($inputs);
    }

    /**
     * Deletes a skill.
     *
     * @param int
     */
    public function delete($id)
    {
        Skill::destroy($id);
    }

    /**
     * Updates a skill.
     *
     * @param int
     * @param array
     */
    public function update($id, array $data)
    {
        //Skill::find($id)-&gt;update($user_data);
    }

}